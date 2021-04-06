<?php

namespace ContainerUF1oINx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder93e94 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3469 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58c30 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getConnection', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getMetadataFactory', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getExpressionBuilder', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'beginTransaction', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getCache', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'transactional', array('func' => $func), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->transactional($func);
    }

    public function commit()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'commit', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->commit();
    }

    public function rollback()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'rollback', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getClassMetadata', array('className' => $className), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'createQuery', array('dql' => $dql), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'createNamedQuery', array('name' => $name), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'createQueryBuilder', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'flush', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'clear', array('entityName' => $entityName), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->clear($entityName);
    }

    public function close()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'close', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->close();
    }

    public function persist($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'persist', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'remove', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'refresh', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'detach', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'merge', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'contains', array('entity' => $entity), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getEventManager', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getConfiguration', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'isOpen', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getUnitOfWork', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getProxyFactory', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'initializeObject', array('obj' => $obj), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'getFilters', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'isFiltersStateClean', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'hasFilters', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return $this->valueHolder93e94->hasFilters();
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

        $instance->initializera3469 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder93e94) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder93e94 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder93e94->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__get', ['name' => $name], $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        if (isset(self::$publicProperties58c30[$name])) {
            return $this->valueHolder93e94->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93e94;

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

        $targetObject = $this->valueHolder93e94;
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
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93e94;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder93e94;
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
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__isset', array('name' => $name), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93e94;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder93e94;
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
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__unset', array('name' => $name), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder93e94;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder93e94;
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
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__clone', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        $this->valueHolder93e94 = clone $this->valueHolder93e94;
    }

    public function __sleep()
    {
        $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, '__sleep', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;

        return array('valueHolder93e94');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3469 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3469;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3469 && ($this->initializera3469->__invoke($valueHolder93e94, $this, 'initializeProxy', array(), $this->initializera3469) || 1) && $this->valueHolder93e94 = $valueHolder93e94;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder93e94;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder93e94;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
