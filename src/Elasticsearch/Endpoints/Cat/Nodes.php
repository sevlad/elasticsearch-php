<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Cat;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class Nodes
 * Elasticsearch76 API name cat.nodes
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Nodes extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/nodes";
    }

    public function getParamWhitelist(): array
    {
        return [
            'bytes',
            'format',
            'full_id',
            'local',
            'master_timeout',
            'h',
            'help',
            's',
            'time',
            'v'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
