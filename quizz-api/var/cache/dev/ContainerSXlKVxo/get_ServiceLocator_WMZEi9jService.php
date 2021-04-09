<?php

namespace ContainerSXlKVxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WMZEi9jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wMZEi9j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wMZEi9j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'gameRepository' => ['privates', 'App\\Repository\\GameRepository', 'getGameRepositoryService', true],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'gameRepository' => 'App\\Repository\\GameRepository',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'serializer' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'validator' => '?',
        ]);
    }
}
