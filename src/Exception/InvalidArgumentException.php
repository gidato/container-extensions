<?php

namespace Gidato\Container\Exception;

use InvalidArgumentException as SplInvalidArgumentException;

/**
 * @inheritDoc
 */
class InvalidArgumentException extends SplInvalidArgumentException implements ExceptionInterface
{
}
