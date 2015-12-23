<?php

namespace Customer\V1\Rest\CustomerType;

class CustomerTypeResourceFactory
{

    public function __invoke($services)
    {
        $entityManager = $services->get('Doctrine\ORM\EntityManager');
        $repositoryService = $entityManager->getRepository('Domain\Entity\Customer\CustomerTypeEntity');
        $standardService = $services->get('CustomerTypeStandardService');

        $customerTypeResource = new CustomerTypeResource();
        $customerTypeResource->setRepositoryService($repositoryService)
                ->setStandardService($standardService);

        return $customerTypeResource;
    }

}
