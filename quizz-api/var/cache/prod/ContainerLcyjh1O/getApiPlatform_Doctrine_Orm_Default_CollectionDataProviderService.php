<?php

namespace ContainerLcyjh1O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.doctrine.orm.default.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.doctrine.orm.default.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterService'));
            yield 1 => ($container->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService'));
            yield 2 => ($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService'));
            yield 3 => ($container->privates['api_platform.doctrine.orm.query_extension.order'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_OrderService'));
            yield 4 => ($container->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService'));
        }, 5));
    }
}
