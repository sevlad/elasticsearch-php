<?php

declare(strict_types = 1);

namespace Elasticsearch76\Tests\ConnectionPool\Selectors;

use Elasticsearch76;
use Elasticsearch76\Connections\ConnectionInterface;

/**
 * Class SnifferTest
 *
 * @category   Tests
 * @package    Elasticsearch76
 * @subpackage Tests\ConnectionPool\RoundRobinSelectorTest
 * @author     Zachary Tong <zachary.tong@elasticsearch.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link       http://elasticsearch.org
 */
class RoundRobinSelectorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Add Ten connections, select 15 to verify round robin
     *
     * @covers \Elasticsearch76\ConnectionPool\Selectors\RoundRobinSelector::select
     *
     * @return void
     */
    public function testTenConnections()
    {
        $roundRobin = new Elasticsearch76\ConnectionPool\Selectors\RoundRobinSelector();

        $mockConnections = [];
        foreach (range(0, 9) as $index) {
            $mockConnections[$index] = $this->getMockBuilder(ConnectionInterface::class)
                ->disableOriginalConstructor()
                ->getMock();
        }

        // select ten
        $this->assertSame($mockConnections[0], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[1], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[2], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[3], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[4], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[5], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[6], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[7], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[8], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[9], $roundRobin->select($mockConnections));

        // select five - should start from the first one (index: 0)
        $this->assertSame($mockConnections[0], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[1], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[2], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[3], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[4], $roundRobin->select($mockConnections));
    }

    /**
     * Add Ten connections, select five, remove three, test another 10 to check
     * that the round-robining works after removing connections
     *
     * @covers \Elasticsearch76\ConnectionPool\Selectors\RoundRobinSelector::select
     *
     * @return void
     */
    public function testAddTenConnectionsTestFiveRemoveThreeTestTen()
    {
        $roundRobin = new Elasticsearch76\ConnectionPool\Selectors\RoundRobinSelector();

        $mockConnections = [];
        foreach (range(0, 9) as $index) {
            $mockConnections[$index] = $this->getMockBuilder(ConnectionInterface::class)
                ->disableOriginalConstructor()
                ->getMock();
        }

        // select five
        $this->assertSame($mockConnections[0], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[1], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[2], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[3], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[4], $roundRobin->select($mockConnections));

        // remove three
        unset($mockConnections[8]);
        unset($mockConnections[9]);
        unset($mockConnections[10]);

        // select ten after removal
        $this->assertSame($mockConnections[5], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[6], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[7], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[0], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[1], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[2], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[3], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[4], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[5], $roundRobin->select($mockConnections));
        $this->assertSame($mockConnections[6], $roundRobin->select($mockConnections));
    }
}
