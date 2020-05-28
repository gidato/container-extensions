# Gidato Container

This repository holds all interfaces for extending PSR container to standardise use of factories, as well as creating new instances.

This allows common access for use with other container implementations through use of bridges (eg for Laminas and Laravel).

For example, where Laravel uses make(), and Laminas uses build() this interface uses create() and will require a bridge to allow use of either of those services.
