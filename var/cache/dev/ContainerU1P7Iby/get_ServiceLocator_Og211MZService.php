<?php

namespace ContainerU1P7Iby;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Og211MZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.og211MZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.og211MZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'banqueDeSang' => ['privates', '.errored..service_locator.og211MZ.App\\Entity\\BanqueDeSang', NULL, 'Cannot autowire service ".service_locator.og211MZ": it references class "App\\Entity\\BanqueDeSang" but no such service exists.'],
        ], [
            'banqueDeSang' => 'App\\Entity\\BanqueDeSang',
        ]);
    }
}