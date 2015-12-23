<?php

namespace DoctrineRepository\Service\Address;

use Domain\Entity\Address\AddressEntity;
use DoctrineRepository\Service\BaseRepository;

class AddressStandard extends BaseRepository
{

    public function __construct($entityManager)
    {
        parent::__construct($entityManager);
    }

    public function insert(array $data)
    {
        $patioTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\PatioTypeEntity', 
                        $data['patioTypeId']);
        
        $federativeUnitEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\FederativeUnitEntity', 
                        $data['federativeUnitId']);
        
        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerEntity', 
                        $data['customerId']);

        $addressEntity = new AddressEntity();
        $addressEntity->setPatio($data['patio'])
                ->setNumber($data['number'])
                ->setComplement($data['complement'])
                ->setNeighborhood($data['neighborhood'])
                ->setCity($data['city'])
                ->setZipCode($data['zipCode'])
                ->setPatioType($patioTypeEntity)
                ->setFederativeUnit($federativeUnitEntity)
                ->setCustomer($customerEntity);

        return $this->commit($addressEntity);
    }

    public function update(array $data)
    {
        $patioTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\PatioTypeEntity', 
                        $data['patioTypeId']);
        
        $federativeUnitEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\FederativeUnitEntity', 
                        $data['federativeUnitId']);
        
        $customerEntity = $this->entityManager
                ->getReference('Domain\Entity\Customer\CustomerEntity', 
                        $data['customerId']);
        
        $addressEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\AddressEntity', $data['id']);
        $addressEntity->setPatio($data['patio'])
                ->setNumber($data['number'])
                ->setComplement($data['complement'])
                ->setNeighborhood($data['neighborhood'])
                ->setCity($data['city'])
                ->setZipCode($data['zipCode'])
                ->setPatioType($patioTypeEntity)
                ->setFederativeUnit($federativeUnitEntity)
                ->setCustomer($customerEntity);
        
        return $this->commit($addressEntity);
    }

    public function delete($id)
    {
        $addressEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\AddressEntity', (int) $id);
        return $this->drop($addressEntity);
    }

}
