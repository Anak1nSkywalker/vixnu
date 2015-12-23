<?php

namespace DoctrineRepository\Service;

abstract class BaseRepository {
            
    public $entityManager;
    
    public function __construct($entityManager) 
    {
        $this->entityManager = $entityManager;                
    }
    
    public function commit($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();        
        return $entity;        
    }
        
    public function drop($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();        
        return $entity;
    }
    
}
