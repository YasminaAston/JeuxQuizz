<?php

namespace ContainerLcyjh1O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuestionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\QuestionRepository' shared autowired service.
     *
     * @return \App\Repository\QuestionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\QuestionRepository'] = new \App\Repository\QuestionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}