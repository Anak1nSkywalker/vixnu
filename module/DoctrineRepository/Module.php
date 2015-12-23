<?php

namespace DoctrineRepository;

use DoctrineRepository\Service\Address\AddressStandard;
use DoctrineRepository\Service\Address\FederativeUnitStandard;
use DoctrineRepository\Service\Address\PatioTypeStandard;
use DoctrineRepository\Service\Customer\CustomerStandard;
use DoctrineRepository\Service\Customer\CustomerTypeStandard;

class Module {
    
    public function getServiceConfig(){
        return array(
            'factories' => array(
                'CustomerStandardService' => function($serviceManager) {
                    $entityManager = $serviceManager->get('Doctrine\ORM\EntityManager');  
                    $customerStandardService = new CustomerStandard($entityManager);                    
                    return $customerStandardService;                    
                },
                'CustomerTypeStandardService' => function($serviceManager) {
                    $entityManager = $serviceManager->get('Doctrine\ORM\EntityManager');  
                    $customerTypeStandardService = new CustomerTypeStandard($entityManager);                    
                    return $customerTypeStandardService;                    
                },
                'AddressStandardService' => function($serviceManager) {
                    $entityManager = $serviceManager->get('Doctrine\ORM\EntityManager');  
                    $addressStandardService = new AddressStandard($entityManager);                    
                    return $addressStandardService;                    
                },
                'FederativeUnitStandardService' => function($serviceManager) {
                    $entityManager = $serviceManager->get('Doctrine\ORM\EntityManager');  
                    $federativeUnitStandardService = new FederativeUnitStandard($entityManager);                    
                    return $federativeUnitStandardService;                    
                },
                'PatioTypeStandardService' => function($serviceManager) {
                    $entityManager = $serviceManager->get('Doctrine\ORM\EntityManager');  
                    $patioTypeStandardService = new PatioTypeStandard($entityManager);                    
                    return $patioTypeStandardService;                    
                }
            )
        );               
    }
    
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                ),
            ),
        );
    }
    
    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }
    
}
