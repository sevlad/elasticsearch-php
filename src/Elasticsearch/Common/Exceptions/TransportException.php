<?php

declare(strict_types = 1);

namespace Elasticsearch76\Common\Exceptions;

/**
 * TransportException
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class TransportException extends \Exception implements Elasticsearch76Exception
{
}
