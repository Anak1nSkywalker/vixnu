<?php

namespace DoctrineRepository\Service\Address;

use Domain\Entity\Address\FederativeunitEntity;
use DoctrineRepository\Service\BaseRepository;

class FederativeUnitStandard extends BaseRepository
{

    public function __construct($entityManager)
    {
        parent::__construct($entityManager);
    }

    public function insert(array $data)
    {
        $federativeUnitEntity = new FederativeunitEntity();
        $federativeUnitEntity->setAcronym($data['acronym'])
                ->setDescription($data['description']);

        return $this->commit($federativeUnitEntity);
    }

    public function update(array $data)
    {
        $federativeUnitEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\FederativeUnitEntity', $data['id']);
        $federativeUnitEntity->setAcronym($data['acronym'])
                ->setDescription($data['description']);

        return $this->commit($federativeUnitEntity);
    }

    public function delete($id)
    {
        $federativeUnitEntity = $this->entityManager
                ->getReference('Domain\Entity\Address\FederativeUnitEntity', (int) $id);
        return $this->drop($federativeUnitEntity);
    }

}
