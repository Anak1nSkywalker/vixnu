<?php

namespace Domain\Entity\Address;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="addresss") * 
 */
class AddressEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue 
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="Domain\Entity\Address\PatioTypeEntity")
     * @ORM\JoinColumn(name="patio_type_id", referencedColumnName="id")
     */
    public $patioType;

    /**
     * @ORM\ManyToOne(targetEntity="Domain\Entity\Address\FederativeUnitEntity")
     * @ORM\JoinColumn(name="federative_unit_id", referencedColumnName="id")
     */
    public $federativeUnit;

    /**
     * @ORM\ManyToOne(targetEntity="Domain\Entity\Customer\CustomerEntity")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    public $customer;

    /**
     * @ORM\Column(type="string", length=45)
     */
    public $patio;

    /**
     * @ORM\Column(type="integer")
     */
    public $number;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    public $complement;

    /**
     * @ORM\Column(type="string", length=45)
     */
    public $neighborhood;

    /**
     * @ORM\Column(type="string", length=45)
     */
    public $city;

    /**
     * @ORM\Column(name="zip_code", type="integer")
     */
    public $zipCode;

    public function getId()
    {
        return $this->id;
    }

    public function getPatio()
    {
        return $this->patio;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setPatio($patio)
    {
        $this->patio = $patio;
        return $this;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function setComplement($complement)
    {
        $this->complement = $complement;
        return $this;
    }

    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getPatioType()
    {
        return $this->patioType;
    }

    public function getFederativeUnit()
    {
        return $this->federativeUnit;
    }

    public function setPatioType($patioType)
    {
        $this->patioType = $patioType;
        return $this;
    }

    public function setFederativeUnit($federativeUnit)
    {
        $this->federativeUnit = $federativeUnit;
        return $this;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

}
