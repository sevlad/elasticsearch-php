<?php

declare(strict_types = 1);

namespace Elasticsearch76\Common\Exceptions;

/**
 * RuntimeException
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class RuntimeException extends \RuntimeException implements Elasticsearch76Exception
{
}
