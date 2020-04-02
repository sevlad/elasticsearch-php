<?php

declare(strict_types = 1);

namespace Elasticsearch76\Common\Exceptions;

/**
 * UnexpectedValueException
 *
 * Denote a value that is outside the normally accepted values
 *
 * @category Elasticsearch76
 * @package  Elasticsearch76\Common\Exceptions
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class UnexpectedValueException extends \UnexpectedValueException implements Elasticsearch76Exception
{
}
