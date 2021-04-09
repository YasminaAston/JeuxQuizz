<?php

namespace ContainerSXlKVxo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_ClonerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/VarCloner.php';

        $container->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }
}
