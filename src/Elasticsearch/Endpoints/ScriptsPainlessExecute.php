<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class ScriptsPainlessExecute
 * Elasticsearch76 API name scripts_painless_execute
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ScriptsPainlessExecute extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_scripts/painless/_execute";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): ScriptsPainlessExecute
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}
