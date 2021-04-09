<?php

namespace ContainerXYgGoZ9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CORFCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.COR_fC_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.COR_fC_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'responseRepository' => ['privates', 'App\\Repository\\ResponseRepository', 'getResponseRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'responseRepository' => 'App\\Repository\\ResponseRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
