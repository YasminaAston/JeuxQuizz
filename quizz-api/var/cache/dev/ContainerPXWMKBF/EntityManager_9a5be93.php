<?php

namespace ContainerPXWMKBF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5df03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer881cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74929 = [
        
    ];

    public function getConnection()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getConnection', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getMetadataFactory', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getExpressionBuilder', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'beginTransaction', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getCache', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'transactional', array('func' => $func), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->transactional($func);
    }

    public function commit()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'commit', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->commit();
    }

    public function rollback()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'rollback', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getClassMetadata', array('className' => $className), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'createQuery', array('dql' => $dql), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'createNamedQuery', array('name' => $name), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'createQueryBuilder', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'flush', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'clear', array('entityName' => $entityName), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->clear($entityName);
    }

    public function close()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'close', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->close();
    }

    public function persist($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'persist', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'remove', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'refresh', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'detach', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'merge', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'contains', array('entity' => $entity), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getEventManager', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getConfiguration', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'isOpen', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getUnitOfWork', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getProxyFactory', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'initializeObject', array('obj' => $obj), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'getFilters', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'isFiltersStateClean', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'hasFilters', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return $this->valueHolder5df03->hasFilters();
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

        $instance->initializer881cf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5df03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5df03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5df03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__get', ['name' => $name], $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        if (isset(self::$publicProperties74929[$name])) {
            return $this->valueHolder5df03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5df03;

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

        $targetObject = $this->valueHolder5df03;
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
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5df03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5df03;
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
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__isset', array('name' => $name), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5df03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5df03;
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
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__unset', array('name' => $name), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5df03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5df03;
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
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__clone', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        $this->valueHolder5df03 = clone $this->valueHolder5df03;
    }

    public function __sleep()
    {
        $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, '__sleep', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;

        return array('valueHolder5df03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer881cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer881cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer881cf && ($this->initializer881cf->__invoke($valueHolder5df03, $this, 'initializeProxy', array(), $this->initializer881cf) || 1) && $this->valueHolder5df03 = $valueHolder5df03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5df03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5df03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
