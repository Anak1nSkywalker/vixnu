<?php

namespace Domain\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="customers") * 
 */
class CustomerEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue 
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="Domain\Entity\Customer\CustomerTypeEntity")
     * @ORM\JoinColumn(name="customer_type_id", referencedColumnName="id")
     */
    public $customerType;

    /**
     * @ORM\Column(type="string", length=45)
     */
    public $name;

    /**
     * @ORM\Column(name="birth_date", type="date"), 
     */
    public $birthDate;

    /**
     * @ORM\Column(type="string", length=1)
     */
    public $gender;

    /**
     * @ORM\Column(type="string", length=11, unique=true)
     */
    public $cpf;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    public $email;

    /**
     * @ORM\Column(name="phone_1", type="string", length=16)
     */
    public $phone1;

    /**
     * @ORM\Column(name="phone_2", type="string", length=16, nullable=true)
     */
    public $phone2;

    /**
     * @ORM\Column(name="registration_date", type="datetime")
     */
    public $registrationDate;

    /**
     * @ORM\Column(name="modification_date", type="datetime", nullable=true)
     */
    public $modificationDate;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone1()
    {
        return $this->phone1;
    }

    public function getPhone2()
    {
        return $this->phone2;
    }

    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;
        return $this;
    }

    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
        return $this;
    }

    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }

    public function getCustomerType()
    {
        return $this->customerType;
    }

    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        return $this;
    }

}
