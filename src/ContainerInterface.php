<?php

namespace Gidato\Container;

use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{

    /**
     * Find a service by its name and optional options.
     * If service is "shared" the service will be cached, and the same service will be given on subsequent calls.
     *
     * @param  string $name
     * @param  null|array  $options
     * @return mixed
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     *
     * @return mixed Entry.
     */
    public function getWith($name, array $options = null);

    /**
     * Build a NEW service by its name, using optional options.
     * It is not cached.
     *
     * @param  string $name
     * @param  null|array  $options
     * @return mixed
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     */
    public function createWith($name, array $options = null);

    /**
     * Build a NEW service using its name only.
     * It is not cached.
     *
     * @param  string $name
     * @param  null|array  $options
     * @return mixed
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     */
    public function create($name);

    /**
     * Find a container with name specified (to separate conatainer by type)
     *
     * @param  string $name
     * @return ContainerInterface
     *
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     */
    public function container(string $name): ContainerInterface;

    /**
     * Get all references / keys to items that can be made/retreived
     *
     * @param  bool $includeContainers whether to include containers in list or not (default: exclude)
     * @param  bool $includeAliases whether to include aliases in list or not (default: exclude)
     * @return array
     */
    public function getKeys(bool $includeContainers = false, bool $includeAliases = false): array;

    /**
    * Get all built instances
    *
    * @param  bool $includeContainers whether to include containers in list or not (default: exclude)
    * @return array
     */
    public function getAll(bool $includeContainers = false): array
    {

}
