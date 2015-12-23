<?php

namespace DoctrineRepository\Service\Customer;

use Domain\Entity\Customer\CustomerTypeEntity;
use DoctrineRepository\Service\BaseRepository; 

class CustomerTypeStandard extends BaseRepository
{

    public function __construct($entityManager)
    {
        parent::__construct($entityManager);
    }

    public function insert(array $data)
    {
        $customerEntity = new CustomerTypeEntity();
        $customerEntity->setDescription($data['description']);
        
        return $this->commit($customerEntity);
    }

    public function update(array $data)
    {
        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerTypeEntity', 
                        $data['id']);
        $customerEntity->setDescription($data['description']);

        return $this->commit($customerEntity);
    }

    public function delete($id)
    {
        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerTypeEntity', 
                        (int) $id);
        return $this->drop($customerEntity);
    }

}
