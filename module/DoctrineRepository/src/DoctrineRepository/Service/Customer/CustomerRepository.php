<?php

namespace DoctrineRepository\Service\Customer;

use Doctrine\ORM\EntityRepository;

class CustomerRepository extends EntityRepository
{

    public function getByName($name)
    {
        // metodo exemplo;        
    }

}
