<?php

namespace ContainerLcyjh1O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGameRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\GameRepository' shared autowired service.
     *
     * @return \App\Repository\GameRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\GameRepository'] = new \App\Repository\GameRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
