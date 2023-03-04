<?php

namespace ContainerQfaZLOl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J9Q40xJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j9Q40xJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j9Q40xJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notifyAlertRepository' => ['privates', 'App\\Repository\\NotifyAlertRepository', 'getNotifyAlertRepositoryService', true],
        ], [
            'notifyAlertRepository' => 'App\\Repository\\NotifyAlertRepository',
        ]);
    }
}
