<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Cat;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class NodeAttrs
 * Elasticsearch76 API name cat.nodeattrs
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class NodeAttrs extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/nodeattrs";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'local',
            'master_timeout',
            'h',
            'help',
            's',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
