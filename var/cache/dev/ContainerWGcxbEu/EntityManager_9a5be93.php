<?php

namespace ContainerWGcxbEu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb5d8d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer779ca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesadedd = [
        
    ];

    public function getConnection()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getConnection', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getMetadataFactory', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getExpressionBuilder', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'beginTransaction', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getCache', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'transactional', array('func' => $func), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'commit', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->commit();
    }

    public function rollback()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'rollback', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getClassMetadata', array('className' => $className), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'createQuery', array('dql' => $dql), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'createNamedQuery', array('name' => $name), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'createQueryBuilder', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'flush', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'clear', array('entityName' => $entityName), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->clear($entityName);
    }

    public function close()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'close', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->close();
    }

    public function persist($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'persist', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'remove', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'refresh', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'detach', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'merge', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'contains', array('entity' => $entity), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getEventManager', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getConfiguration', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'isOpen', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getUnitOfWork', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getProxyFactory', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'initializeObject', array('obj' => $obj), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'getFilters', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'isFiltersStateClean', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'hasFilters', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return $this->valueHolderb5d8d->hasFilters();
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

        $instance->initializer779ca = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb5d8d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb5d8d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb5d8d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__get', ['name' => $name], $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        if (isset(self::$publicPropertiesadedd[$name])) {
            return $this->valueHolderb5d8d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5d8d;

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

        $targetObject = $this->valueHolderb5d8d;
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
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5d8d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb5d8d;
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
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__isset', array('name' => $name), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5d8d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb5d8d;
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
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__unset', array('name' => $name), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5d8d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb5d8d;
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
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__clone', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        $this->valueHolderb5d8d = clone $this->valueHolderb5d8d;
    }

    public function __sleep()
    {
        $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, '__sleep', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;

        return array('valueHolderb5d8d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer779ca = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer779ca;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer779ca && ($this->initializer779ca->__invoke($valueHolderb5d8d, $this, 'initializeProxy', array(), $this->initializer779ca) || 1) && $this->valueHolderb5d8d = $valueHolderb5d8d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5d8d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5d8d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
