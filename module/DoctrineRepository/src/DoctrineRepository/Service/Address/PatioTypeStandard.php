<?php

namespace DoctrineRepository\Service\Address;

use Domain\Entity\Address\PatioTypeEntity;
use DoctrineRepository\Service\BaseRepository;

class PatioTypeStandard extends BaseRepository
{

    public function __construct($entityManager)
    {
        parent::__construct($entityManager);
    }

    public function insert(array $data)
    {
        $patioTypeEntity = new PatioTypeEntity();
        $patioTypeEntity->setDescription($data['description']);

        return $this->commit($patioTypeEntity);
    }

    public function update(array $data)
    {
        $patioTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\PatioTypeEntity', 
                        $data['id']);
        $patioTypeEntity->setDescription($data['description']);

        return $this->commit($patioTypeEntity);
    }

    public function delete($id)
    {
        $patioTypeEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\PatioTypeEntity', 
                        (int) $id);
        return $this->drop($patioTypeEntity);
    }

}
