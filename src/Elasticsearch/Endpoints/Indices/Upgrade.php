<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Indices;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class Upgrade
 * Elasticsearch76 API name indices.upgrade
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Upgrade extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_upgrade";
        }
        return "/_upgrade";
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_indices',
            'expand_wildcards',
            'ignore_unavailable',
            'wait_for_completion',
            'only_ancient_segments'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}
