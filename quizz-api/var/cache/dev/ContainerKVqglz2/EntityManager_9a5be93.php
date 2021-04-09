<?php

namespace ContainerKVqglz2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9cdfc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer516c8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties913a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getConnection', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getMetadataFactory', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getExpressionBuilder', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'beginTransaction', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getCache', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'transactional', array('func' => $func), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->transactional($func);
    }

    public function commit()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'commit', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->commit();
    }

    public function rollback()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'rollback', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getClassMetadata', array('className' => $className), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'createQuery', array('dql' => $dql), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'createNamedQuery', array('name' => $name), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'createQueryBuilder', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'flush', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'clear', array('entityName' => $entityName), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->clear($entityName);
    }

    public function close()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'close', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->close();
    }

    public function persist($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'persist', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'remove', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'refresh', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'detach', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'merge', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'contains', array('entity' => $entity), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getEventManager', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getConfiguration', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'isOpen', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getUnitOfWork', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getProxyFactory', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'initializeObject', array('obj' => $obj), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'getFilters', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'isFiltersStateClean', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'hasFilters', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return $this->valueHolder9cdfc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer516c8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9cdfc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9cdfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9cdfc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__get', ['name' => $name], $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        if (isset(self::$publicProperties913a4[$name])) {
            return $this->valueHolder9cdfc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cdfc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9cdfc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cdfc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9cdfc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__isset', array('name' => $name), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cdfc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9cdfc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__unset', array('name' => $name), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cdfc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9cdfc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__clone', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        $this->valueHolder9cdfc = clone $this->valueHolder9cdfc;
    }

    public function __sleep()
    {
        $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, '__sleep', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;

        return array('valueHolder9cdfc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer516c8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer516c8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer516c8 && ($this->initializer516c8->__invoke($valueHolder9cdfc, $this, 'initializeProxy', array(), $this->initializer516c8) || 1) && $this->valueHolder9cdfc = $valueHolder9cdfc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9cdfc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9cdfc;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
