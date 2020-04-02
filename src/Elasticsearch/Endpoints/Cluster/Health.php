<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Cluster;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class Health
 * Elasticsearch76 API name cluster.health
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Cluster
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Health extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cluster/health/$index";
        }
        return "/_cluster/health";
    }

    public function getParamWhitelist(): array
    {
        return [
            'expand_wildcards',
            'level',
            'local',
            'master_timeout',
            'timeout',
            'wait_for_active_shards',
            'wait_for_nodes',
            'wait_for_events',
            'wait_for_no_relocating_shards',
            'wait_for_no_initializing_shards',
            'wait_for_status'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
