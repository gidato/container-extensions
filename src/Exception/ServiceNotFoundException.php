<?php

namespace Gidato\Container\Exception;

use InvalidArgumentException as SplInvalidArgumentException;

/**
 * @inheritDoc
 */
class ServiceNotFoundException extends SplInvalidArgumentException implements ExceptionInterface
{
}
