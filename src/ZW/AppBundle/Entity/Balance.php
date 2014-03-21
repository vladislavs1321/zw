<?php

namespace ZW\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Balance
 *
 * @ORM\Table(name="balance")
 * @ORM\Entity
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class Balance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="amount", type="decimal", precision=6, scale=2)
     */
    private $amount;

    /**
     * @ORM\OneToOne(targetEntity="ZW\AppBundle\Entity\User", mappedBy="balance")
     */
    private $user;

    public function __construct()
    {
        $this->amount = 0;
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
     * Set amount
     *
     * @param string $amount
     * @return Balance
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set user
     *
     * @param \ZW\AppBundle\Entity\User $user
     * @return Balance
     */
    public function setUser(\ZW\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ZW\AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
