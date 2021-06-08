<?php

namespace ContainerQyDSw60;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7f11c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer354a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf8e11 = [
        
    ];

    public function getConnection()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getConnection', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getMetadataFactory', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getExpressionBuilder', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'beginTransaction', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getCache', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'transactional', array('func' => $func), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->transactional($func);
    }

    public function commit()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'commit', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->commit();
    }

    public function rollback()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'rollback', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getClassMetadata', array('className' => $className), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'createQuery', array('dql' => $dql), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'createNamedQuery', array('name' => $name), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'createQueryBuilder', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'flush', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'clear', array('entityName' => $entityName), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->clear($entityName);
    }

    public function close()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'close', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->close();
    }

    public function persist($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'persist', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'remove', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'refresh', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'detach', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'merge', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'contains', array('entity' => $entity), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getEventManager', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getConfiguration', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'isOpen', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getUnitOfWork', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getProxyFactory', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'initializeObject', array('obj' => $obj), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'getFilters', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'isFiltersStateClean', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'hasFilters', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return $this->valueHolder7f11c->hasFilters();
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

        $instance->initializer354a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7f11c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7f11c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7f11c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__get', ['name' => $name], $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        if (isset(self::$publicPropertiesf8e11[$name])) {
            return $this->valueHolder7f11c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f11c;

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

        $targetObject = $this->valueHolder7f11c;
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
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f11c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7f11c;
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
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__isset', array('name' => $name), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f11c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7f11c;
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
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__unset', array('name' => $name), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f11c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7f11c;
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
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__clone', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        $this->valueHolder7f11c = clone $this->valueHolder7f11c;
    }

    public function __sleep()
    {
        $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, '__sleep', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;

        return array('valueHolder7f11c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer354a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer354a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer354a8 && ($this->initializer354a8->__invoke($valueHolder7f11c, $this, 'initializeProxy', array(), $this->initializer354a8) || 1) && $this->valueHolder7f11c = $valueHolder7f11c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7f11c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7f11c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
