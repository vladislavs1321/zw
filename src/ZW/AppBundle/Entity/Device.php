<?php

namespace ZW\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="device")
 * @ORM\Entity
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class Device
{
    /**
     * @var integer
     */
    const TYPE_ANDROID = 1;

    /**
     * @var integer
     */
    const TYPE_IPHONE = 2;

    /**
     * @var integer
     */
    const TYPE_IPAD = 3;

    /**
     * @var array
     */
    public static $allowedTypes = array(
        self::TYPE_ANDROID => 'Android',
        self::TYPE_IPHONE => 'iPhone',
        self::TYPE_IPAD => 'iPad',
    );

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
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="ZW\AppBundle\Entity\User", mappedBy="devices")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->name;
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \ZW\AppBundle\Entity\User $user
     * @return Device
     */
    public function addUser(\ZW\AppBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ZW\AppBundle\Entity\User $user
     */
    public function removeUser(\ZW\AppBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Device
     */
    public function setType($type)
    {
        $this->type = $type;

        $this->name = self::$allowedTypes[$this->type];

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
