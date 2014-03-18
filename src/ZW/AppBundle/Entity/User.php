<?php

namespace ZW\AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\OneToOne(targetEntity="ZW\AppBundle\Entity\Balance", mappedBy="user", cascade={"persist"})
     */
    protected $balance;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set balance
     *
     * @param \ZW\AppBundle\Entity\Balance $balance
     * @return User
     */
    public function setBalance(\ZW\AppBundle\Entity\Balance $balance = null)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get balance
     *
     * @return \ZW\AppBundle\Entity\Balance 
     */
    public function getBalance()
    {
        return $this->balance;
    }
}
