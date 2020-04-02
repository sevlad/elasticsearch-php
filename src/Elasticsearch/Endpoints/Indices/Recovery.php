<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Indices;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class Recovery
 * Elasticsearch76 API name indices.recovery
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Indices
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Recovery extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_recovery";
        }
        return "/_recovery";
    }

    public function getParamWhitelist(): array
    {
        return [
            'detailed',
            'active_only'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
