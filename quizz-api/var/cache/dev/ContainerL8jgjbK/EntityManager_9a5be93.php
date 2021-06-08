<?php

namespace ContainerL8jgjbK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd7d5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeracfe8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdc93f = [
        
    ];

    public function getConnection()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getConnection', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getMetadataFactory', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getExpressionBuilder', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'beginTransaction', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getCache', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getCache();
    }

    public function transactional($func)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'transactional', array('func' => $func), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->transactional($func);
    }

    public function commit()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'commit', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->commit();
    }

    public function rollback()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'rollback', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getClassMetadata', array('className' => $className), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'createQuery', array('dql' => $dql), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'createNamedQuery', array('name' => $name), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'createQueryBuilder', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'flush', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'clear', array('entityName' => $entityName), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->clear($entityName);
    }

    public function close()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'close', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->close();
    }

    public function persist($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'persist', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'remove', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'refresh', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'detach', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'merge', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getRepository', array('entityName' => $entityName), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'contains', array('entity' => $entity), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getEventManager', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getConfiguration', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'isOpen', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getUnitOfWork', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getProxyFactory', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'initializeObject', array('obj' => $obj), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'getFilters', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'isFiltersStateClean', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'hasFilters', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return $this->valueHolderdd7d5->hasFilters();
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

        $instance->initializeracfe8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd7d5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd7d5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd7d5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__get', ['name' => $name], $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        if (isset(self::$publicPropertiesdc93f[$name])) {
            return $this->valueHolderdd7d5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7d5;

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

        $targetObject = $this->valueHolderdd7d5;
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
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7d5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd7d5;
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
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__isset', array('name' => $name), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7d5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd7d5;
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
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__unset', array('name' => $name), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd7d5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd7d5;
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
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__clone', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        $this->valueHolderdd7d5 = clone $this->valueHolderdd7d5;
    }

    public function __sleep()
    {
        $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, '__sleep', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;

        return array('valueHolderdd7d5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeracfe8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeracfe8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeracfe8 && ($this->initializeracfe8->__invoke($valueHolderdd7d5, $this, 'initializeProxy', array(), $this->initializeracfe8) || 1) && $this->valueHolderdd7d5 = $valueHolderdd7d5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd7d5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd7d5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
