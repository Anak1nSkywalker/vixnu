<?php
namespace Address\V1\Rest\FederativeUnit;

class FederativeUnitResourceFactory
{
    public function __invoke($services)
    {
        $entityManager = $services->get('Doctrine\ORM\EntityManager');
        $repositoryService = $entityManager->getRepository('Domain\Entity\Address\FederativeUnitEntity');
        $standardService = $services->get('FederativeUnitStandardService');

        $federativeUnitResource = new FederativeUnitResource();
        $federativeUnitResource->setRepositoryService($repositoryService)
                ->setStandardService($standardService);

        return $federativeUnitResource;
    }
}
