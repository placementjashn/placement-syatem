<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\Service;

use Psr\Container\ContainerInterface;

/**
 * A ServiceProviderInterface exposes the identifiers and the types of services provided by a container.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Mateusz Sip <mateusz.sip@gmail.com>
 *
<<<<<<< HEAD
 * @template-covariant T of mixed
=======
<<<<<<< HEAD
 * @template T of mixed
=======
 * @template-covariant T of mixed
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
 */
interface ServiceProviderInterface extends ContainerInterface
{
    /**
     * @return T
     */
    public function get(string $id): mixed;

    public function has(string $id): bool;

    /**
     * Returns an associative array of service types keyed by the identifiers provided by the current container.
     *
     * Examples:
     *
     *  * ['logger' => 'Psr\Log\LoggerInterface'] means the object provides a service named "logger" that implements Psr\Log\LoggerInterface
     *  * ['foo' => '?'] means the container provides service name "foo" of unspecified type
     *  * ['bar' => '?Bar\Baz'] means the container provides a service "bar" of type Bar\Baz|null
     *
     * @return string[] The provided service types, keyed by service names
     */
    public function getProvidedServices(): array;
}
