<?php

namespace DoctrineRepository\Service\Customer;

use Domain\Entity\Customer\CustomerEntity;
use DoctrineRepository\Service\BaseRepository; 

class CustomerStandard extends BaseRepository
{

    public function __construct($entityManager)
    {
        parent::__construct($entityManager);
    }

    public function insert(array $data)
    {
        $customerTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerTypeEntity', 
                        $data['customerTypeId']);

        $customerEntity = new CustomerEntity();
        $customerEntity->setName($data['name'])
                ->setBirthDate(new \DateTime($data['birthDate']))
                ->setGender($data['gender'])
                ->setCpf($data['cpf'])
                ->setEmail($data['email'])
                ->setPhone1($data['phone1'])
                ->setPhone2($data['phone2'])
                ->setRegistrationDate(new \DateTime('now'))
                ->setCustomerType($customerTypeEntity);

        return $this->commit($customerEntity);
    }

    public function update(array $data)
    {
        $customerTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerTypeEntity', 
                        $data['customerTypeId']);

        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerEntity', $data['id']);
        $customerEntity->setName($data['name'])
                ->setBirthDate(new \DateTime($data['birthDate']))
                ->setGender($data['gender'])
                ->setCpf($data['cpf'])
                ->setEmail($data['email'])
                ->setPhone1($data['phone1'])
                ->setPhone2($data['phone2'])
                ->setModificationDate(new \DateTime('now'))
                ->setCustomerType($customerTypeEntity);

        return $this->commit($customerEntity);
    }

    public function delete($id)
    {
        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerEntity', (int) $id);
        return $this->drop($customerEntity);
    }

}
