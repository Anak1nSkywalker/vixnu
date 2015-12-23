<?php

namespace Address\V1\Rest\Address;

class AddressResourceFactory
{

    public function __invoke($services)
    {
        $entityManager = $services->get('Doctrine\ORM\EntityManager');
        $repositoryService = $entityManager->getRepository('Domain\Entity\Address\AddressEntity');
        $standardService = $services->get('AddressStandardService');

        $addressResource = new AddressResource();
        $addressResource->setRepositoryService($repositoryService)
                ->setStandardService($standardService);

        return $addressResource;
    }

}
