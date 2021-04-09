<?php

namespace ContainerSXlKVxo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9beb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1309 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties65272 = [
        
    ];

    public function getConnection()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getConnection', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getMetadataFactory', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getExpressionBuilder', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'beginTransaction', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getCache', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getCache();
    }

    public function transactional($func)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'transactional', array('func' => $func), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->transactional($func);
    }

    public function commit()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'commit', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->commit();
    }

    public function rollback()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'rollback', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getClassMetadata', array('className' => $className), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'createQuery', array('dql' => $dql), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'createNamedQuery', array('name' => $name), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'createQueryBuilder', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'flush', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'clear', array('entityName' => $entityName), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->clear($entityName);
    }

    public function close()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'close', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->close();
    }

    public function persist($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'persist', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'remove', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'refresh', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'detach', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'merge', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getRepository', array('entityName' => $entityName), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'contains', array('entity' => $entity), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getEventManager', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getConfiguration', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'isOpen', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getUnitOfWork', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getProxyFactory', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'initializeObject', array('obj' => $obj), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'getFilters', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'isFiltersStateClean', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'hasFilters', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return $this->valueHolderc9beb->hasFilters();
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

        $instance->initializera1309 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc9beb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9beb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9beb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__get', ['name' => $name], $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        if (isset(self::$publicProperties65272[$name])) {
            return $this->valueHolderc9beb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9beb;

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

        $targetObject = $this->valueHolderc9beb;
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
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9beb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9beb;
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
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__isset', array('name' => $name), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9beb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9beb;
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
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__unset', array('name' => $name), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9beb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9beb;
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
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__clone', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        $this->valueHolderc9beb = clone $this->valueHolderc9beb;
    }

    public function __sleep()
    {
        $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, '__sleep', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;

        return array('valueHolderc9beb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera1309 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera1309;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera1309 && ($this->initializera1309->__invoke($valueHolderc9beb, $this, 'initializeProxy', array(), $this->initializera1309) || 1) && $this->valueHolderc9beb = $valueHolderc9beb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9beb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9beb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
