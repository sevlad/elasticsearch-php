<?php

declare(strict_types = 1);

namespace Elasticsearch76\ConnectionPool\Selectors;

use Elasticsearch76\Connections\ConnectionInterface;

/**
 * Class RandomSelector
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Connections\Selectors
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
interface SelectorInterface
{
    /**
     * Perform logic to select a single ConnectionInterface instance from the array provided
     *
     * @param \Elasticsearch76\Connections\ConnectionInterface[] $connections an array of ConnectionInterface instances to choose from
     */
    public function select(array $connections): ConnectionInterface;
}
