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
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Contracts\Service\Attribute\SubscribedService;

/**
 * Implementation of ServiceSubscriberInterface that determines subscribed services from
 * method return types. Service ids are available as "ClassName::methodName".
 *
 * @author Kevin Bond <kevinbond@gmail.com>
 */
trait ServiceSubscriberTrait
{
    /** @var ContainerInterface */
    protected $container;

    public static function getSubscribedServices(): array
    {
        $services = method_exists(get_parent_class(self::class) ?: '', __FUNCTION__) ? parent::getSubscribedServices() : [];

        foreach ((new \ReflectionClass(self::class))->getMethods() as $method) {
            if (self::class !== $method->getDeclaringClass()->name) {
                continue;
            }

            if (!$attribute = $method->getAttributes(SubscribedService::class)[0] ?? null) {
                continue;
            }

            if ($method->isStatic() || $method->isAbstract() || $method->isGenerator() || $method->isInternal() || $method->getNumberOfRequiredParameters()) {
                throw new \LogicException(sprintf('Cannot use "%s" on method "%s::%s()" (can only be used on non-static, non-abstract methods with no parameters).', SubscribedService::class, self::class, $method->name));
            }

            if (!$returnType = $method->getReturnType()) {
                throw new \LogicException(sprintf('Cannot use "%s" on methods without a return type in "%s::%s()".', SubscribedService::class, $method->name, self::class));
            }

            /* @var SubscribedService $attribute */
            $attribute = $attribute->newInstance();
            $attribute->key ??= self::class.'::'.$method->name;
            $attribute->type ??= $returnType instanceof \ReflectionNamedType ? $returnType->getName() : (string) $returnType;
            $attribute->nullable = $returnType->allowsNull();

            if ($attribute->attributes) {
                $services[] = $attribute;
            } else {
                $services[$attribute->key] = ($attribute->nullable ? '?' : '').$attribute->type;
            }
        }

        return $services;
    }

    #[Required]
    public function setContainer(ContainerInterface $container): ?ContainerInterface
    {
<<<<<<< HEAD
        $ret = null;
=======
<<<<<<< HEAD
        $this->container = $container;

>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
        if (method_exists(get_parent_class(self::class) ?: '', __FUNCTION__)) {
            $ret = parent::setContainer($container);
        }

<<<<<<< HEAD
        $this->container = $container;

        return $ret;
=======
        return null;
=======
        $ret = null;
        if (method_exists(get_parent_class(self::class) ?: '', __FUNCTION__)) {
            $ret = parent::setContainer($container);
        }

        $this->container = $container;

        return $ret;
>>>>>>> b47e28794f4ada0b2f41405dd11295797f0ab85b
>>>>>>> cfc45212359e3c31e90a15df610051b13d41f46e
    }
}
