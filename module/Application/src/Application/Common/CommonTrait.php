<?php

namespace Application\Common;

trait CommonTrait
{

    protected $repositoryService;
    protected $standardService;

    public function setRepositoryService($repositoryService)
    {
        $this->repositoryService = $repositoryService;
        return $this;
    }

    public function setStandardService($standardService)
    {
        $this->standardService = $standardService;
        return $this;
    }

}
