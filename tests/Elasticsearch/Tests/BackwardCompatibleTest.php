<?php
declare(strict_types = 1);

namespace Elasticsearch76\Tests;

use Elasticsearch76\Endpoints\AbstractEndpoint;
use Throwable;

/**
 * Class BackwardCompatibleTest
 *
 * @category   Tests
 * @package    Elasticsearch76
 * @subpackage Tests
 * @author     Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link       http://elasticsearch.org
 */
class BackwardCompatibleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * List of endpoints in elasticsearch-php 7.2 branch
     */
    public function getClasses()
    {
        return [
            ['\Elasticsearch76\Endpoints\MTermVectors'],
            ['\Elasticsearch76\Endpoints\Tasks\Get'],
            ['\Elasticsearch76\Endpoints\Tasks\Cancel'],
            ['\Elasticsearch76\Endpoints\Tasks\TasksList'],
            ['\Elasticsearch76\Endpoints\Ping'],
            ['\Elasticsearch76\Endpoints\ScriptsPainlessExecute'],
            ['\Elasticsearch76\Endpoints\DeleteByQuery'],
            ['\Elasticsearch76\Endpoints\Scroll'],
            ['\Elasticsearch76\Endpoints\Explain'],
            ['\Elasticsearch76\Endpoints\Get'],
            ['\Elasticsearch76\Endpoints\UpdateByQueryRethrottle'],
            ['\Elasticsearch76\Endpoints\Delete'],
            ['\Elasticsearch76\Endpoints\SearchShards'],
            ['\Elasticsearch76\Endpoints\Mget'],
            ['\Elasticsearch76\Endpoints\Source\Get'],
            ['\Elasticsearch76\Endpoints\Source\Exists'],
            ['\Elasticsearch76\Endpoints\Bulk'],
            ['\Elasticsearch76\Endpoints\Cluster\PendingTasks'],
            ['\Elasticsearch76\Endpoints\Cluster\Health'],
            ['\Elasticsearch76\Endpoints\Cluster\Settings\Get'],
            ['\Elasticsearch76\Endpoints\Cluster\Settings\Put'],
            ['\Elasticsearch76\Endpoints\Cluster\Reroute'],
            ['\Elasticsearch76\Endpoints\Cluster\State'],
            ['\Elasticsearch76\Endpoints\Cluster\RemoteInfo'],
            ['\Elasticsearch76\Endpoints\Cluster\Stats'],
            ['\Elasticsearch76\Endpoints\Cluster\AllocationExplain'],
            ['\Elasticsearch76\Endpoints\Cluster\Nodes\HotThreads'],
            ['\Elasticsearch76\Endpoints\Cluster\Nodes\Info'],
            ['\Elasticsearch76\Endpoints\Cluster\Nodes\ReloadSecureSettings'],
            ['\Elasticsearch76\Endpoints\Cluster\Nodes\Stats'],
            ['\Elasticsearch76\Endpoints\Cluster\Nodes\Usage'],
            ['\Elasticsearch76\Endpoints\ClearScroll'],
            ['\Elasticsearch76\Endpoints\Script\Get'],
            ['\Elasticsearch76\Endpoints\Script\Delete'],
            ['\Elasticsearch76\Endpoints\Script\Put'],
            ['\Elasticsearch76\Endpoints\Exists'],
            ['\Elasticsearch76\Endpoints\Index'],
            ['\Elasticsearch76\Endpoints\UpdateByQuery'],
            ['\Elasticsearch76\Endpoints\Ingest\Pipeline\Get'],
            ['\Elasticsearch76\Endpoints\Ingest\Pipeline\Delete'],
            ['\Elasticsearch76\Endpoints\Ingest\Pipeline\Put'],
            ['\Elasticsearch76\Endpoints\Ingest\Pipeline\ProcessorGrok'],
            ['\Elasticsearch76\Endpoints\Ingest\Simulate'],
            ['\Elasticsearch76\Endpoints\SearchTemplate'],
            ['\Elasticsearch76\Endpoints\FieldCaps'],
            ['\Elasticsearch76\Endpoints\Snapshot\Get'],
            ['\Elasticsearch76\Endpoints\Snapshot\Delete'],
            ['\Elasticsearch76\Endpoints\Snapshot\Restore'],
            ['\Elasticsearch76\Endpoints\Snapshot\Create'],
            ['\Elasticsearch76\Endpoints\Snapshot\Status'],
            ['\Elasticsearch76\Endpoints\Snapshot\Repository\Verify'],
            ['\Elasticsearch76\Endpoints\Snapshot\Repository\Get'],
            ['\Elasticsearch76\Endpoints\Snapshot\Repository\Delete'],
            ['\Elasticsearch76\Endpoints\Snapshot\Repository\Create'],
            ['\Elasticsearch76\Endpoints\Count'],
            ['\Elasticsearch76\Endpoints\Create'],
            ['\Elasticsearch76\Endpoints\Info'],
            ['\Elasticsearch76\Endpoints\Indices\Type\Exists'],
            ['\Elasticsearch76\Endpoints\Indices\ForceMerge'],
            ['\Elasticsearch76\Endpoints\Indices\Flush'],
            ['\Elasticsearch76\Endpoints\Indices\Analyze'],
            ['\Elasticsearch76\Endpoints\Indices\Rollover'],
            ['\Elasticsearch76\Endpoints\Indices\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Template\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Template\Delete'],
            ['\Elasticsearch76\Endpoints\Indices\Template\Exists'],
            ['\Elasticsearch76\Endpoints\Indices\Template\Put'],
            ['\Elasticsearch76\Endpoints\Indices\Delete'],
            ['\Elasticsearch76\Endpoints\Indices\FlushSynced'],
            ['\Elasticsearch76\Endpoints\Indices\Refresh'],
            ['\Elasticsearch76\Endpoints\Indices\Exists'],
            ['\Elasticsearch76\Endpoints\Indices\Cache\Clear'],
            ['\Elasticsearch76\Endpoints\Indices\Settings\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Settings\Put'],
            ['\Elasticsearch76\Endpoints\Indices\Create'],
            ['\Elasticsearch76\Endpoints\Indices\Close'],
            ['\Elasticsearch76\Endpoints\Indices\ShardStores'],
            ['\Elasticsearch76\Endpoints\Indices\Stats'],
            ['\Elasticsearch76\Endpoints\Indices\Validate\Query'],
            ['\Elasticsearch76\Endpoints\Indices\Alias\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Alias\Delete'],
            ['\Elasticsearch76\Endpoints\Indices\Alias\Exists'],
            ['\Elasticsearch76\Endpoints\Indices\Alias\Put'],
            ['\Elasticsearch76\Endpoints\Indices\Open'],
            ['\Elasticsearch76\Endpoints\Indices\Segments'],
            ['\Elasticsearch76\Endpoints\Indices\Upgrade\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Upgrade\Post'],
            ['\Elasticsearch76\Endpoints\Indices\Aliases\Update'],
            ['\Elasticsearch76\Endpoints\Indices\Recovery'],
            ['\Elasticsearch76\Endpoints\Indices\Shrink'],
            ['\Elasticsearch76\Endpoints\Indices\Split'],
            ['\Elasticsearch76\Endpoints\Indices\Mapping\Get'],
            ['\Elasticsearch76\Endpoints\Indices\Mapping\Put'],
            ['\Elasticsearch76\Endpoints\Indices\Mapping\GetField'],
            ['\Elasticsearch76\Endpoints\Reindex'],
            ['\Elasticsearch76\Endpoints\DeleteByQueryRethrottle'],
            ['\Elasticsearch76\Endpoints\MsearchTemplate'],
            ['\Elasticsearch76\Endpoints\TermVectors'],
            ['\Elasticsearch76\Endpoints\AbstractEndpoint'],
            ['\Elasticsearch76\Endpoints\RenderSearchTemplate'],
            ['\Elasticsearch76\Endpoints\Update'],
            ['\Elasticsearch76\Endpoints\Search'],
            ['\Elasticsearch76\Endpoints\ReindexRethrottle'],
            ['\Elasticsearch76\Endpoints\RankEval'],
            ['\Elasticsearch76\Endpoints\Msearch'],
            ['\Elasticsearch76\Endpoints\Cat\ThreadPool'],
            ['\Elasticsearch76\Endpoints\Cat\Fielddata'],
            ['\Elasticsearch76\Endpoints\Cat\Master'],
            ['\Elasticsearch76\Endpoints\Cat\NodeAttrs'],
            ['\Elasticsearch76\Endpoints\Cat\Aliases'],
            ['\Elasticsearch76\Endpoints\Cat\PendingTasks'],
            ['\Elasticsearch76\Endpoints\Cat\Templates'],
            ['\Elasticsearch76\Endpoints\Cat\Allocation'],
            ['\Elasticsearch76\Endpoints\Cat\Plugins'],
            ['\Elasticsearch76\Endpoints\Cat\Health'],
            ['\Elasticsearch76\Endpoints\Cat\Count'],
            ['\Elasticsearch76\Endpoints\Cat\Shards'],
            ['\Elasticsearch76\Endpoints\Cat\Repositories'],
            ['\Elasticsearch76\Endpoints\Cat\Nodes'],
            ['\Elasticsearch76\Endpoints\Cat\Tasks'],
            ['\Elasticsearch76\Endpoints\Cat\Segments'],
            ['\Elasticsearch76\Endpoints\Cat\Help'],
            ['\Elasticsearch76\Endpoints\Cat\Recovery'],
            ['\Elasticsearch76\Endpoints\Cat\Snapshots'],
            ['\Elasticsearch76\Endpoints\Cat\Indices']
        ];
    }

    /**
     * @dataProvider getClasses
     */
    public function testOldClassNamespacesPreviousTo74($class)
    {
        $this->assertTrue(class_exists($class), sprintf("Class %s does not exist", $class));
    }
}
