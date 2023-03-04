<?php

namespace ContainerQfaZLOl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FHxPURcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fHxPURc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fHxPURc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notification' => ['privates', '.errored..service_locator.fHxPURc.App\\Entity\\Notifications', NULL, 'Cannot autowire service ".service_locator.fHxPURc": it references class "App\\Entity\\Notifications" but no such service exists.'],
        ], [
            'notification' => 'App\\Entity\\Notifications',
        ]);
    }
}
