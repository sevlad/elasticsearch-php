<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Cat;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class ThreadPool
 * Elasticsearch76 API name cat.thread_pool
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Cat
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ThreadPool extends AbstractEndpoint
{
    protected $thread_pool_patterns;

    public function getURI(): string
    {
        $thread_pool_patterns = $this->thread_pool_patterns ?? null;

        if (isset($thread_pool_patterns)) {
            return "/_cat/thread_pool/$thread_pool_patterns";
        }
        return "/_cat/thread_pool";
    }

    public function getParamWhitelist(): array
    {
        return [
            'format',
            'size',
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

    public function setThreadPoolPatterns($thread_pool_patterns): ThreadPool
    {
        if (isset($thread_pool_patterns) !== true) {
            return $this;
        }
        if (is_array($thread_pool_patterns) === true) {
            $thread_pool_patterns = implode(",", $thread_pool_patterns);
        }
        $this->thread_pool_patterns = $thread_pool_patterns;

        return $this;
    }
}
