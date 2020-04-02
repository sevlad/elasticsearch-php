<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class GetScriptLanguages
 * Elasticsearch76 API name get_script_languages
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class GetScriptLanguages extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_script_language";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
