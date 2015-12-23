<?php

namespace Address\V1\Rest\PatioType;

class PatioTypeResourceFactory
{

    public function __invoke($services)
    {
        $entityManager = $services->get('Doctrine\ORM\EntityManager');
        $repositoryService = $entityManager->getRepository('Domain\Entity\Address\PatioTypeEntity');
        $standardService = $services->get('PatioTypeStandardService');

        $patioTypeResource = new PatioTypeResource();
        $patioTypeResource->setRepositoryService($repositoryService)
                ->setStandardService($standardService);

        return $patioTypeResource;
    }

}
