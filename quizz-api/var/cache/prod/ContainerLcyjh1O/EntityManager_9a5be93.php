<?php

namespace ContainerLcyjh1O;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldereb251 = null;
    private $initializer403ad = null;
    private static $publicProperties3cc57 = [
        
    ];
    public function getConnection()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getConnection', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getMetadataFactory', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getExpressionBuilder', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'beginTransaction', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getCache', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getCache();
    }
    public function transactional($func)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'transactional', array('func' => $func), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->transactional($func);
    }
    public function commit()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'commit', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->commit();
    }
    public function rollback()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'rollback', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getClassMetadata', array('className' => $className), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'createQuery', array('dql' => $dql), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'createNamedQuery', array('name' => $name), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'createQueryBuilder', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'flush', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'clear', array('entityName' => $entityName), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->clear($entityName);
    }
    public function close()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'close', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->close();
    }
    public function persist($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'persist', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'remove', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'refresh', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'detach', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'merge', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getRepository', array('entityName' => $entityName), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'contains', array('entity' => $entity), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getEventManager', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getConfiguration', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'isOpen', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getUnitOfWork', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getProxyFactory', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'initializeObject', array('obj' => $obj), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'getFilters', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'isFiltersStateClean', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'hasFilters', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return $this->valueHoldereb251->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer403ad = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldereb251) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb251 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldereb251->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__get', ['name' => $name], $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        if (isset(self::$publicProperties3cc57[$name])) {
            return $this->valueHoldereb251->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb251;
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
        $targetObject = $this->valueHoldereb251;
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
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb251;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldereb251;
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
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__isset', array('name' => $name), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb251;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldereb251;
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
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__unset', array('name' => $name), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb251;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldereb251;
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
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__clone', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        $this->valueHoldereb251 = clone $this->valueHoldereb251;
    }
    public function __sleep()
    {
        $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, '__sleep', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
        return array('valueHoldereb251');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer403ad = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer403ad;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer403ad && ($this->initializer403ad->__invoke($valueHoldereb251, $this, 'initializeProxy', array(), $this->initializer403ad) || 1) && $this->valueHoldereb251 = $valueHoldereb251;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb251;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb251;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
