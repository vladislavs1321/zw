<?php

namespace ZW\AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use ZW\AppBundle\Entity\Balance;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\OneToOne(targetEntity="ZW\AppBundle\Entity\Balance", inversedBy="user", cascade={"persist"})
     */
    protected $balance;

    /**
     * @ORM\ManyToMany(targetEntity="ZW\AppBundle\Entity\Device")
     */
    protected $devices;

    /**
     * @ORM\Column(nullable=true)
     */
    protected $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isEmailConfirmed;


    public function __construct()
    {
        parent::__construct();
        $this->devices = array();
    }

    /**
     * Sets the email.
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->setUsername($email);
        $this->isEmailConfirmed = false;

        return parent::setEmail($email);
    }

    /**
     * Set the canonical email.
     *
     * @param string $emailCanonical
     * @return User
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->setUsernameCanonical($emailCanonical);

        return parent::setEmailCanonical($emailCanonical);
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

    /**
     * Set countries
     *
     * @return User
     */
    public function setCountry($countries)
    {
        $this->country = $countries;
    
        return $this;
    }

    /**
     * Get countries
     *
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add devices
     *
     * @param \ZW\AppBundle\Entity\Device $devices
     * @return User
     */
    public function addDevice(\ZW\AppBundle\Entity\Device $devices)
    {
        $this->devices[] = $devices;

        return $this;
    }

    /**
     * Remove devices
     *
     * @param \ZW\AppBundle\Entity\Device $devices
     */
    public function removeDevice(\ZW\AppBundle\Entity\Device $devices)
    {
        $this->devices->removeElement($devices);
    }

    /**
     * Get devices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Set isEmailConfirmed
     *
     * @param boolean $isEmailConfirmed
     * @return User
     */
    public function setIsEmailConfirmed($isEmailConfirmed)
    {
        $this->isEmailConfirmed = $isEmailConfirmed;

        return $this;
    }

    /**
     * Get isEmailConfirmed
     *
     * @return boolean 
     */
    public function getIsEmailConfirmed()
    {
        return $this->isEmailConfirmed;
    }

    /**
    * @ORM\PrePersist
    */
    public function setNewBalance()
    {
        $this->balance = new Balance();
        $this->balance->setUser($this);
    }
}
