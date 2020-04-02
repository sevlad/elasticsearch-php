<?php
declare(strict_types = 1);

namespace Elasticsearch76\Endpoints\Ingest;

use Elasticsearch76\Endpoints\AbstractEndpoint;

/**
 * Class ProcessorGrok
 * Elasticsearch76 API name ingest.processor_grok
 * Generated running $ php util/GenerateEndpoints.php 7.6.0
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Endpoints\Ingest
 * @author   Enrico Zimuel <enrico.zimuel@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class ProcessorGrok extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_ingest/processor/grok";
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
