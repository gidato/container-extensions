<?php

namespace Gidato\Container;

use Gidato\Container\ContainerInterface;

interface FactoryInterface
{
    public function __invoke(ContainerInterface $container, string $requestedName, array $options = null);
}
