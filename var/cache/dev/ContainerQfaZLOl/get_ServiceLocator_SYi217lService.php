<?php

namespace ContainerQfaZLOl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SYi217lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SYi217l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SYi217l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'banqueDeSang' => ['privates', '.errored..service_locator.SYi217l.App\\Entity\\BanqueDeSang', NULL, 'Cannot autowire service ".service_locator.SYi217l": it references class "App\\Entity\\BanqueDeSang" but no such service exists.'],
            'banqueDeSangRepository' => ['privates', 'App\\Repository\\BanqueDeSangRepository', 'getBanqueDeSangRepositoryService', true],
        ], [
            'banqueDeSang' => 'App\\Entity\\BanqueDeSang',
            'banqueDeSangRepository' => 'App\\Repository\\BanqueDeSangRepository',
        ]);
    }
}
