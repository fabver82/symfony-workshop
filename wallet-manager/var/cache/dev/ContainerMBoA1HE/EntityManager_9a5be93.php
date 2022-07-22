<?php

namespace ContainerMBoA1HE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3e09a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer310e8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties49930 = [
        
    ];

    public function getConnection()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getConnection', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getMetadataFactory', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getExpressionBuilder', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'beginTransaction', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getCache', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'transactional', array('func' => $func), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'commit', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->commit();
    }

    public function rollback()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'rollback', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getClassMetadata', array('className' => $className), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'createQuery', array('dql' => $dql), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'createNamedQuery', array('name' => $name), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'createQueryBuilder', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'flush', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'clear', array('entityName' => $entityName), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->clear($entityName);
    }

    public function close()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'close', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->close();
    }

    public function persist($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'persist', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'remove', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'refresh', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'detach', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'merge', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'contains', array('entity' => $entity), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getEventManager', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getConfiguration', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'isOpen', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getUnitOfWork', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getProxyFactory', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'initializeObject', array('obj' => $obj), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'getFilters', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'isFiltersStateClean', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'hasFilters', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return $this->valueHolder3e09a->hasFilters();
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

        $instance->initializer310e8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3e09a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3e09a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3e09a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__get', ['name' => $name], $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        if (isset(self::$publicProperties49930[$name])) {
            return $this->valueHolder3e09a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e09a;

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

        $targetObject = $this->valueHolder3e09a;
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
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e09a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3e09a;
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
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__isset', array('name' => $name), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e09a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3e09a;
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
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__unset', array('name' => $name), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e09a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3e09a;
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
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__clone', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        $this->valueHolder3e09a = clone $this->valueHolder3e09a;
    }

    public function __sleep()
    {
        $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, '__sleep', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;

        return array('valueHolder3e09a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer310e8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer310e8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer310e8 && ($this->initializer310e8->__invoke($valueHolder3e09a, $this, 'initializeProxy', array(), $this->initializer310e8) || 1) && $this->valueHolder3e09a = $valueHolder3e09a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3e09a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3e09a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
