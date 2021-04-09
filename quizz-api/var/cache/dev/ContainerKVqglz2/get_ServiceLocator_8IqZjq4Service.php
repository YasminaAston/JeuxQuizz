<?php

namespace ContainerKVqglz2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8IqZjq4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8IqZjq4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8IqZjq4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\CategoryController::getAll' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\GameController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\GameController::getAll' => ['privates', '.service_locator.hA3ZfRw', 'get_ServiceLocator_HA3ZfRwService', true],
            'App\\Controller\\GameController::new' => ['privates', '.service_locator.wMZEi9j', 'get_ServiceLocator_WMZEi9jService', true],
            'App\\Controller\\QuestionController::delete' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuestionController::edit' => ['privates', '.service_locator.COR_fC_', 'get_ServiceLocator_CORFCService', true],
            'App\\Controller\\QuestionController::getAll' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuestionController::new' => ['privates', '.service_locator.YdOktIu', 'get_ServiceLocator_YdOktIuService', true],
            'App\\Controller\\QuestionController::show' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuizzController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\QuizzController::getAll' => ['privates', '.service_locator.YZ8tOaP', 'get_ServiceLocator_YZ8tOaPService', true],
            'App\\Controller\\QuizzController::getBycategoryAndDifficulty' => ['privates', '.service_locator.wMZEi9j', 'get_ServiceLocator_WMZEi9jService', true],
            'App\\Controller\\ResponseController::edit' => ['privates', '.service_locator.u9gCCHS', 'get_ServiceLocator_U9gCCHSService', true],
            'App\\Controller\\ResponseController::getAll' => ['privates', '.service_locator.pBvscx1', 'get_ServiceLocator_PBvscx1Service', true],
            'App\\Controller\\ResponseController::new' => ['privates', '.service_locator.u9gCCHS', 'get_ServiceLocator_U9gCCHSService', true],
            'App\\Controller\\RoleController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\RoleController::new' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\ScoreController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\ScoreController::new' => ['privates', '.service_locator.R.spHU1', 'get_ServiceLocator_R_SpHU1Service', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.R.spHU1', 'get_ServiceLocator_R_SpHU1Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\CategoryController:getAll' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\GameController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\GameController:getAll' => ['privates', '.service_locator.hA3ZfRw', 'get_ServiceLocator_HA3ZfRwService', true],
            'App\\Controller\\GameController:new' => ['privates', '.service_locator.wMZEi9j', 'get_ServiceLocator_WMZEi9jService', true],
            'App\\Controller\\QuestionController:delete' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuestionController:edit' => ['privates', '.service_locator.COR_fC_', 'get_ServiceLocator_CORFCService', true],
            'App\\Controller\\QuestionController:getAll' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuestionController:new' => ['privates', '.service_locator.YdOktIu', 'get_ServiceLocator_YdOktIuService', true],
            'App\\Controller\\QuestionController:show' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\QuizzController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\QuizzController:getAll' => ['privates', '.service_locator.YZ8tOaP', 'get_ServiceLocator_YZ8tOaPService', true],
            'App\\Controller\\QuizzController:getBycategoryAndDifficulty' => ['privates', '.service_locator.wMZEi9j', 'get_ServiceLocator_WMZEi9jService', true],
            'App\\Controller\\ResponseController:edit' => ['privates', '.service_locator.u9gCCHS', 'get_ServiceLocator_U9gCCHSService', true],
            'App\\Controller\\ResponseController:getAll' => ['privates', '.service_locator.pBvscx1', 'get_ServiceLocator_PBvscx1Service', true],
            'App\\Controller\\ResponseController:new' => ['privates', '.service_locator.u9gCCHS', 'get_ServiceLocator_U9gCCHSService', true],
            'App\\Controller\\RoleController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\RoleController:new' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\ScoreController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\ScoreController:new' => ['privates', '.service_locator.R.spHU1', 'get_ServiceLocator_R_SpHU1Service', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.9jKjuJ5', 'get_ServiceLocator_9jKjuJ5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.R.spHU1', 'get_ServiceLocator_R_SpHU1Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::getAll' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\GameController::edit' => '?',
            'App\\Controller\\GameController::getAll' => '?',
            'App\\Controller\\GameController::new' => '?',
            'App\\Controller\\QuestionController::delete' => '?',
            'App\\Controller\\QuestionController::edit' => '?',
            'App\\Controller\\QuestionController::getAll' => '?',
            'App\\Controller\\QuestionController::new' => '?',
            'App\\Controller\\QuestionController::show' => '?',
            'App\\Controller\\QuizzController::edit' => '?',
            'App\\Controller\\QuizzController::getAll' => '?',
            'App\\Controller\\QuizzController::getBycategoryAndDifficulty' => '?',
            'App\\Controller\\ResponseController::edit' => '?',
            'App\\Controller\\ResponseController::getAll' => '?',
            'App\\Controller\\ResponseController::new' => '?',
            'App\\Controller\\RoleController::edit' => '?',
            'App\\Controller\\RoleController::new' => '?',
            'App\\Controller\\ScoreController::edit' => '?',
            'App\\Controller\\ScoreController::new' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:getAll' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\GameController:edit' => '?',
            'App\\Controller\\GameController:getAll' => '?',
            'App\\Controller\\GameController:new' => '?',
            'App\\Controller\\QuestionController:delete' => '?',
            'App\\Controller\\QuestionController:edit' => '?',
            'App\\Controller\\QuestionController:getAll' => '?',
            'App\\Controller\\QuestionController:new' => '?',
            'App\\Controller\\QuestionController:show' => '?',
            'App\\Controller\\QuizzController:edit' => '?',
            'App\\Controller\\QuizzController:getAll' => '?',
            'App\\Controller\\QuizzController:getBycategoryAndDifficulty' => '?',
            'App\\Controller\\ResponseController:edit' => '?',
            'App\\Controller\\ResponseController:getAll' => '?',
            'App\\Controller\\ResponseController:new' => '?',
            'App\\Controller\\RoleController:edit' => '?',
            'App\\Controller\\RoleController:new' => '?',
            'App\\Controller\\ScoreController:edit' => '?',
            'App\\Controller\\ScoreController:new' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}