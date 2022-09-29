<?php

namespace ContainerGHMbbkW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder020c7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdc757 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6b3d = [
        
    ];

    public function getConnection()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getConnection', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getMetadataFactory', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getExpressionBuilder', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'beginTransaction', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getCache', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'transactional', array('func' => $func), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'commit', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->commit();
    }

    public function rollback()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'rollback', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'createQuery', array('dql' => $dql), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'createQueryBuilder', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'flush', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'clear', array('entityName' => $entityName), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->clear($entityName);
    }

    public function close()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'close', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->close();
    }

    public function persist($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'persist', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'remove', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'refresh', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'detach', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'merge', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'contains', array('entity' => $entity), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getEventManager', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getConfiguration', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'isOpen', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getUnitOfWork', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getProxyFactory', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'getFilters', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'isFiltersStateClean', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'hasFilters', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return $this->valueHolder020c7->hasFilters();
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

        $instance->initializerdc757 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder020c7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder020c7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder020c7->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__get', ['name' => $name], $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        if (isset(self::$publicPropertiesb6b3d[$name])) {
            return $this->valueHolder020c7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder020c7;

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

        $targetObject = $this->valueHolder020c7;
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
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder020c7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder020c7;
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
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__isset', array('name' => $name), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder020c7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder020c7;
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
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__unset', array('name' => $name), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder020c7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder020c7;
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
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__clone', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        $this->valueHolder020c7 = clone $this->valueHolder020c7;
    }

    public function __sleep()
    {
        $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, '__sleep', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;

        return array('valueHolder020c7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc757 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc757;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdc757 && ($this->initializerdc757->__invoke($valueHolder020c7, $this, 'initializeProxy', array(), $this->initializerdc757) || 1) && $this->valueHolder020c7 = $valueHolder020c7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder020c7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder020c7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
