<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Snapshot;

use Elasticsearch76\Common\Exceptions\RuntimeException;
use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class CleanupRepository
 * Elasticsearch76 API name snapshot.cleanup_repository
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Snapshot
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class CleanupRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository/_cleanup";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.cleanup_repository');
    }

    public function getParamWhitelist(): array
    {
        return [
            'master_timeout',
            'timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setRepository($repository): CleanupRepository
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }
}
