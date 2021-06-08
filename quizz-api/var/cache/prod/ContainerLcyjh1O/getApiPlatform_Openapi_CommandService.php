<?php

namespace ContainerLcyjh1O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_CommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.openapi.command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\OpenApiCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['api_platform.openapi.command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\OpenApiCommand(($container->privates['api_platform.openapi.factory'] ?? $container->load('getApiPlatform_Openapi_FactoryService')), ($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()));

        $instance->setName('api:openapi:export');

        return $instance;
    }
}
