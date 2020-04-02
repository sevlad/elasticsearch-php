<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Cat;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class Indices
 * Elasticsearch76 API name cat.indices
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Indices extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/indices/$index";
        }
        return "/_cat/indices";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'bytes',
            'local',
            'master_timeout',
            'h',
            'health',
            'help',
            'pri',
            's',
            'time',
            'v',
            'include_unloaded_segments'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
