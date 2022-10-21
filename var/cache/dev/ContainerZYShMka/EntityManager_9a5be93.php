<?php

namespace ContainerZYShMka;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4b926 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5734 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2997b = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getConnection', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getMetadataFactory', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getExpressionBuilder', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'beginTransaction', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getCache', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'transactional', array('func' => $func), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'commit', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->commit();
    }

    public function rollback()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'rollback', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'createQuery', array('dql' => $dql), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'createQueryBuilder', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'flush', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'clear', array('entityName' => $entityName), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'close', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->close();
    }

    public function persist($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'persist', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'remove', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'refresh', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'detach', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'merge', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'contains', array('entity' => $entity), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getEventManager', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getConfiguration', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'isOpen', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getUnitOfWork', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getProxyFactory', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'getFilters', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'isFiltersStateClean', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'hasFilters', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return $this->valueHolder4b926->hasFilters();
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

        $instance->initializerb5734 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder4b926) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4b926 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4b926->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__get', ['name' => $name], $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        if (isset(self::$publicProperties2997b[$name])) {
            return $this->valueHolder4b926->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b926;

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

        $targetObject = $this->valueHolder4b926;
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
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b926;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4b926;
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
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__isset', array('name' => $name), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b926;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4b926;
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
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__unset', array('name' => $name), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b926;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4b926;
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
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__clone', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        $this->valueHolder4b926 = clone $this->valueHolder4b926;
    }

    public function __sleep()
    {
        $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, '__sleep', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;

        return array('valueHolder4b926');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5734 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5734;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5734 && ($this->initializerb5734->__invoke($valueHolder4b926, $this, 'initializeProxy', array(), $this->initializerb5734) || 1) && $this->valueHolder4b926 = $valueHolder4b926;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b926;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b926;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
