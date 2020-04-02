<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class SearchShards
 * Elasticsearch76 API name search_shards
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class SearchShards extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_search_shards";
        }
        return "/_search_shards";
    }

    public function getParamWhitelist(): array
    {
        return [
            'preference',
            'routing',
            'local',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
