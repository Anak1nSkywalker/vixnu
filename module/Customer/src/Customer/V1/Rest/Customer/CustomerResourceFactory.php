<?php

namespace Customer\V1\Rest\Customer;

class CustomerResourceFactory
{

    public function __invoke($services)
    {
        $entityManager = $services->get('Doctrine\ORM\EntityManager');
        $repositoryService = $entityManager->getRepository('Domain\Entity\Customer\CustomerEntity');
        $standardService = $services->get('CustomerStandardService');

        $customerResource = new CustomerResource();
        $customerResource->setRepositoryService($repositoryService)
                ->setStandardService($standardService);

        return $customerResource;
    }

}
