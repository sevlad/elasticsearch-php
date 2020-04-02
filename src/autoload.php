<?php
/**
 * File required since elasticsearch-php 7.4.1 for aliasing
 * to the previous endpoint class names.
 *
 * @see https://github.com/elastic/elasticsearch-php/issues/967
 *
 * NOTE: This file will be removed with elasticsearch-php 8.0.0
 */

class_alias('\Elasticsearch76\Endpoints\Nodes\HotThreads', '\Elasticsearch76\Endpoints\Cluster\Nodes\HotThreads');
class_alias('\Elasticsearch76\Endpoints\Nodes\Info', '\Elasticsearch76\Endpoints\Cluster\Nodes\Info');
class_alias('\Elasticsearch76\Endpoints\Nodes\ReloadSecureSettings', '\Elasticsearch76\Endpoints\Cluster\Nodes\ReloadSecureSettings');
class_alias('\Elasticsearch76\Endpoints\Nodes\Stats', '\Elasticsearch76\Endpoints\Cluster\Nodes\Stats');
class_alias('\Elasticsearch76\Endpoints\Nodes\Usage', '\Elasticsearch76\Endpoints\Cluster\Nodes\Usage');
class_alias('\Elasticsearch76\Endpoints\Cluster\GetSettings', '\Elasticsearch76\Endpoints\Cluster\Settings\Get');
class_alias('\Elasticsearch76\Endpoints\Cluster\PutSettings', '\Elasticsearch76\Endpoints\Cluster\Settings\Put');
class_alias('\Elasticsearch76\Endpoints\Indices\DeleteAlias', '\Elasticsearch76\Endpoints\Indices\Alias\Delete');
class_alias('\Elasticsearch76\Endpoints\Indices\ExistsAlias', '\Elasticsearch76\Endpoints\Indices\Alias\Exists');
class_alias('\Elasticsearch76\Endpoints\Indices\GetAlias', '\Elasticsearch76\Endpoints\Indices\Alias\Get');
class_alias('\Elasticsearch76\Endpoints\Indices\PutAlias', '\Elasticsearch76\Endpoints\Indices\Alias\Put');
class_alias('\Elasticsearch76\Endpoints\Indices\UpdateAliases', '\Elasticsearch76\Endpoints\Indices\Aliases\Update');
class_alias('\Elasticsearch76\Endpoints\Indices\ClearCache', '\Elasticsearch76\Endpoints\Indices\Cache\Clear');
class_alias('\Elasticsearch76\Endpoints\Indices\GetMapping', '\Elasticsearch76\Endpoints\Indices\Mapping\Get');
class_alias('\Elasticsearch76\Endpoints\Indices\GetFieldMapping', '\Elasticsearch76\Endpoints\Indices\Mapping\GetField');
class_alias('\Elasticsearch76\Endpoints\Indices\PutMapping', '\Elasticsearch76\Endpoints\Indices\Mapping\Put');
class_alias('\Elasticsearch76\Endpoints\Indices\GetSettings', '\Elasticsearch76\Endpoints\Indices\Settings\Get');
class_alias('\Elasticsearch76\Endpoints\Indices\PutSettings', '\Elasticsearch76\Endpoints\Indices\Settings\Put');
class_alias('\Elasticsearch76\Endpoints\Indices\GetTemplate', '\Elasticsearch76\Endpoints\Indices\Template\Get');
class_alias('\Elasticsearch76\Endpoints\Indices\PutTemplate', '\Elasticsearch76\Endpoints\Indices\Template\Put');
class_alias('\Elasticsearch76\Endpoints\Indices\ExistsTemplate', '\Elasticsearch76\Endpoints\Indices\Template\Exists');
class_alias('\Elasticsearch76\Endpoints\Indices\DeleteTemplate', '\Elasticsearch76\Endpoints\Indices\Template\Delete');
class_alias('\Elasticsearch76\Endpoints\Indices\ExistsType', '\Elasticsearch76\Endpoints\Indices\Type\Exists');
class_alias('\Elasticsearch76\Endpoints\Indices\GetUpgrade', '\Elasticsearch76\Endpoints\Indices\Upgrade\Get');
class_alias('\Elasticsearch76\Endpoints\Indices\Upgrade', '\Elasticsearch76\Endpoints\Indices\Upgrade\Post');
class_alias('\Elasticsearch76\Endpoints\Indices\ValidateQuery', '\Elasticsearch76\Endpoints\Indices\Validate\Query');
class_alias('\Elasticsearch76\Endpoints\Ingest\DeletePipeline', '\Elasticsearch76\Endpoints\Ingest\Pipeline\Delete');
class_alias('\Elasticsearch76\Endpoints\Ingest\GetPipeline', '\Elasticsearch76\Endpoints\Ingest\Pipeline\Get');
class_alias('\Elasticsearch76\Endpoints\Ingest\PutPipeline', '\Elasticsearch76\Endpoints\Ingest\Pipeline\Put');
class_alias('\Elasticsearch76\Endpoints\Ingest\ProcessorGrok', '\Elasticsearch76\Endpoints\Ingest\Pipeline\ProcessorGrok');
class_alias('\Elasticsearch76\Endpoints\GetScript', '\Elasticsearch76\Endpoints\Script\Get');
class_alias('\Elasticsearch76\Endpoints\PutScript', '\Elasticsearch76\Endpoints\Script\Put');
class_alias('\Elasticsearch76\Endpoints\DeleteScript', '\Elasticsearch76\Endpoints\Script\Delete');
class_alias('\Elasticsearch76\Endpoints\Snapshot\CreateRepository', '\Elasticsearch76\Endpoints\Snapshot\Repository\Create');
class_alias('\Elasticsearch76\Endpoints\Snapshot\DeleteRepository', '\Elasticsearch76\Endpoints\Snapshot\Repository\Delete');
class_alias('\Elasticsearch76\Endpoints\Snapshot\GetRepository', '\Elasticsearch76\Endpoints\Snapshot\Repository\Get');
class_alias('\Elasticsearch76\Endpoints\Snapshot\VerifyRepository', '\Elasticsearch76\Endpoints\Snapshot\Repository\Verify');
class_alias('\Elasticsearch76\Endpoints\GetSource', '\Elasticsearch76\Endpoints\Source\Get');
class_alias('\Elasticsearch76\Endpoints\ExistsSource', '\Elasticsearch76\Endpoints\Source\Exists');
class_alias('\Elasticsearch76\Endpoints\Tasks\ListTasks', '\Elasticsearch76\Endpoints\Tasks\TasksList');
