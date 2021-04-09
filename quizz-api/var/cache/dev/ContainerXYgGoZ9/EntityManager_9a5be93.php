<?php

namespace ContainerXYgGoZ9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf4b5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer491b3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2ae0b = [
        
    ];

    public function getConnection()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getConnection', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getMetadataFactory', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getExpressionBuilder', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'beginTransaction', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getCache', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'transactional', array('func' => $func), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->transactional($func);
    }

    public function commit()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'commit', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->commit();
    }

    public function rollback()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'rollback', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getClassMetadata', array('className' => $className), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'createQuery', array('dql' => $dql), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'createNamedQuery', array('name' => $name), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'createQueryBuilder', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'flush', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'clear', array('entityName' => $entityName), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->clear($entityName);
    }

    public function close()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'close', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->close();
    }

    public function persist($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'persist', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'remove', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'refresh', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'detach', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'merge', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'contains', array('entity' => $entity), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getEventManager', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getConfiguration', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'isOpen', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getUnitOfWork', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getProxyFactory', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'initializeObject', array('obj' => $obj), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'getFilters', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'isFiltersStateClean', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'hasFilters', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return $this->valueHolderdf4b5->hasFilters();
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

        $instance->initializer491b3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf4b5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf4b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf4b5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__get', ['name' => $name], $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        if (isset(self::$publicProperties2ae0b[$name])) {
            return $this->valueHolderdf4b5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf4b5;

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

        $targetObject = $this->valueHolderdf4b5;
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
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf4b5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf4b5;
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
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__isset', array('name' => $name), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf4b5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf4b5;
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
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__unset', array('name' => $name), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf4b5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf4b5;
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
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__clone', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        $this->valueHolderdf4b5 = clone $this->valueHolderdf4b5;
    }

    public function __sleep()
    {
        $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, '__sleep', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;

        return array('valueHolderdf4b5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer491b3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer491b3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer491b3 && ($this->initializer491b3->__invoke($valueHolderdf4b5, $this, 'initializeProxy', array(), $this->initializer491b3) || 1) && $this->valueHolderdf4b5 = $valueHolderdf4b5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf4b5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf4b5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
