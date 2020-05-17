<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RefUnsur extends \Application\Entity\RefUnsur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'idJabatanFungsional', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'nama', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'keterangan', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'kodeRomawi', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'kodeAngka'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'idJabatanFungsional', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'nama', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'keterangan', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'kodeRomawi', '' . "\0" . 'Application\\Entity\\RefUnsur' . "\0" . 'kodeAngka'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RefUnsur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdJabatanFungsional(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdJabatanFungsional', []);

        return parent::getIdJabatanFungsional();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdJabatanFungsional(?string $idJabatanFungsional): \Application\Entity\RefUnsur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdJabatanFungsional', [$idJabatanFungsional]);

        return parent::setIdJabatanFungsional($idJabatanFungsional);
    }

    /**
     * {@inheritDoc}
     */
    public function getNama(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNama', []);

        return parent::getNama();
    }

    /**
     * {@inheritDoc}
     */
    public function setNama(?string $nama): \Application\Entity\RefUnsur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNama', [$nama]);

        return parent::setNama($nama);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeterangan(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeterangan', []);

        return parent::getKeterangan();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeterangan(?string $keterangan): \Application\Entity\RefUnsur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeterangan', [$keterangan]);

        return parent::setKeterangan($keterangan);
    }

    /**
     * {@inheritDoc}
     */
    public function getKodeRomawi(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKodeRomawi', []);

        return parent::getKodeRomawi();
    }

    /**
     * {@inheritDoc}
     */
    public function setKodeRomawi(?string $kodeRomawi): \Application\Entity\RefUnsur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKodeRomawi', [$kodeRomawi]);

        return parent::setKodeRomawi($kodeRomawi);
    }

    /**
     * {@inheritDoc}
     */
    public function getKodeAngka(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKodeAngka', []);

        return parent::getKodeAngka();
    }

    /**
     * {@inheritDoc}
     */
    public function setKodeAngka(?int $kodeAngka): \Application\Entity\RefUnsur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKodeAngka', [$kodeAngka]);

        return parent::setKodeAngka($kodeAngka);
    }

}
