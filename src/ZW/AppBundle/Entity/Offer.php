<?php

namespace ZW\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer")
 * @ORM\Entity
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class Offer
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $payout_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $protocol;

    /**
     * @ORM\Column(type="date")
     */
    private $expiration_date;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preview_url;

    /**
     * @ORM\Column(type="float")
     */
    private $payout;

    /**
     * @ORM\OneToMany(targetEntity="ZW\AppBundle\Entity\Category", mappedBy="offer")
     */
    private $categories;
    
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $currency;

    /**
     * @ORM\OneToMany(targetEntity="ZW\AppBundle\Entity\Country", mappedBy="offer")
     */
    private $countries;

    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Offer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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

    /**
     * Set description
     *
     * @param string $description
     * @return Offer
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set payout_type
     *
     * @param string $payoutType
     * @return Offer
     */
    public function setPayoutType($payoutType)
    {
        $this->payout_type = $payoutType;

        return $this;
    }

    /**
     * Get payout_type
     *
     * @return string 
     */
    public function getPayoutType()
    {
        return $this->payout_type;
    }

    /**
     * Set protocol
     *
     * @param string $protocol
     * @return Offer
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get protocol
     *
     * @return string 
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set expiration_date
     *
     * @param \DateTime $expirationDate
     * @return Offer
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expiration_date = $expirationDate;

        return $this;
    }

    /**
     * Get expiration_date
     *
     * @return \DateTime 
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Set preview_url
     *
     * @param string $previewUrl
     * @return Offer
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->preview_url = $previewUrl;

        return $this;
    }

    /**
     * Get preview_url
     *
     * @return string 
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * Set payout
     *
     * @param float $payout
     * @return Offer
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;

        return $this;
    }

    /**
     * Get payout
     *
     * @return float 
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * Add categories
     *
     * @param \ZW\AppBundle\Entity\Category $categories
     * @return Offer
     */
    public function addCategory(\ZW\AppBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \ZW\AppBundle\Entity\Category $categories
     */
    public function removeCategory(\ZW\AppBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add countries
     *
     * @param \ZW\AppBundle\Entity\Country $countries
     * @return Offer
     */
    public function addCountry(\ZW\AppBundle\Entity\Country $countries)
    {
        $this->countries[] = $countries;

        return $this;
    }

    /**
     * Remove countries
     *
     * @param \ZW\AppBundle\Entity\Country $countries
     */
    public function removeCountry(\ZW\AppBundle\Entity\Country $countries)
    {
        $this->countries->removeElement($countries);
    }

    /**
     * Get countries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Offer
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
