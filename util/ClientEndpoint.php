<?php
/**
 * Client endpoint class for code generation
 *
 * @author Enrico Zimuel (enrico.zimuel@elastic.co)
 */
declare(strict_types = 1);

namespace Elasticsearch76\Util;

use Exception;

class ClientEndpoint extends NamespaceEndpoint
{
    const CLIENT_CLASS_TEMPLATE   = __DIR__ . '/template/client-class';
    const NEW_NAMESPACE_TEMPLATE  = __DIR__ . '/template/new-namespace';
    const PROPERTY_CLASS_TEMPLATE = __DIR__ . '/template/namespace-property';
    const NAMESPACE_FUNC_TEMPLATE = __DIR__ . '/template/client-namespace-function';

    protected $endpoints = [];
    protected $endpointNames = [];
    protected $namespace = [];
    protected $version; /* Elasticsearch76 version used to generate the class */

    public function __construct(array $namespace, string $version)
    {
        $this->namespace = $namespace;
        $this->version = $version;
    }

    public function renderClass(): string
    {
        if (empty($this->endpoints)) {
            throw new Exception("No endpoints has been added. I cannot render the class");
        }
        $class = file_get_contents(self::CLIENT_CLASS_TEMPLATE);
        // use Namespace
        $useNamespace = '';
        foreach ($this->namespace as $name) {
            if (empty($name)) {
                continue;
            }
            $useNamespace .= sprintf("use Elasticsearch76\Namespaces\%sNamespace;\n", ucfirst($name));
        }
        $class = str_replace(':use-namespaces', $useNamespace, $class);

        // new Namespace
        $newNamespace = '';
        foreach ($this->namespace as $name) {
            if (empty($name)) {
                continue;
            }
            $newName = file_get_contents(self::NEW_NAMESPACE_TEMPLATE);
            $newName = str_replace(':namespace', ucfirst($name) . 'Namespace', $newName);
            $newName = str_replace(':name', $name, $newName);
            $newNamespace .= $newName;
        }
        $class = str_replace(':new-namespaces', $newNamespace, $class);

        // Properties
        $properties = '';
        foreach ($this->namespace as $name) {
            if (empty($name)) {
                continue;
            }
            $prop = file_get_contents(self::PROPERTY_CLASS_TEMPLATE);
            $prop = str_replace(':namespace', ucfirst($name), $prop);
            $prop = str_replace(':var_namespace', $name, $prop);
            $properties .= $prop . "\n";
        }
        $class = str_replace(':namespace_properties', $properties, $class);

        // Endpoints
        $endpoints = '';
        foreach ($this->endpoints as $endpoint) {
            $endpoints .= $this->renderEndpoint($endpoint);
        }
        $class = str_replace(':endpoints', $endpoints, $class);

        // Namespace functions
        $functions = '';
        foreach ($this->namespace as $name) {
            if (empty($name)) {
                continue;
            }
            $func = file_get_contents(self::NAMESPACE_FUNC_TEMPLATE);
            $func = str_replace(':namespace', ucfirst($name) . 'Namespace', $func);
            $func = str_replace(':name', $name, $func);
            $functions .= $func;
        }
        $class = str_replace(':functions', $functions, $class);

        return str_replace(':version', $this->version, $class);
    }
}
