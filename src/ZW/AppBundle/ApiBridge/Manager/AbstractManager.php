<?php

namespace ZW\AppBundle\ApiBridge\Manager;

use Doctrine\ORM\EntityManagerInterface;
use ZW\ApiBundle\Manager\AbstractManager as ApiAbstractManager;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
abstract class AbstractManager
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var \ZW\ApiBundle\Manager\AbstractManager
     */
    protected $apiManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return \Doctrine\ORM\EntityManagerInterface
     */
    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @param $apiManager \ZW\ApiBundle\Manager\AbstractManager
     */
    public function setApiManager(ApiAbstractManager $apiManager)
    {
        $this->apiManager = $apiManager;
    }

    /**
     * @return \ZW\ApiBundle\Manager\AbstractManager
     */
    protected function getApiManager()
    {
        return $this->apiManager;
    }
}
