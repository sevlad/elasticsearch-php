<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Indices;

use Elasticsearch76\Common\Exceptions\RuntimeException;
use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class DeleteTemplate
 * Elasticsearch76 API name indices.delete_template
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class DeleteTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_template/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.delete_template');
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function setName($name): DeleteTemplate
    {
        if (isset($name) !== true) {
            return $this;
        }
        $this->name = $name;

        return $this;
    }
}
