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
     * @ORM\Column(name="preview_url", type="string", length=255)
     */
    private $previewUrl;

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

    /**
     * @ORM\Column(type="integer")
     */
    private $quota;

    /**
     * @ORM\Column(type="integer")
     */
    private $clickCount;

    /**
     * @ORM\Column(type="integer")
     */
    private $downloadCount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled;

    /**
     * @ORM\Column(type="boolean")
     */
    private $moderated;

    /**
     * @ORM\Column(name="image_url", type="string", length=255)
     */
    private $imageUrl;

    public function __construct()
    {
        $this->enabled = false;
        $this->moderated = false;
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
     * Set previewUrl
     *
     * @param string $previewUrl
     * @return Offer
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->previewUrl = $previewUrl;

        return $this;
    }

    /**
     * Get previewUrl
     *
     * @return string 
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
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

    /**
     * Set quota
     *
     * @param integer $quota
     * @return Offer
     */
    public function setQuota($quota)
    {
        $this->quota = $quota;

        return $this;
    }

    /**
     * Get quota
     *
     * @return integer 
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set clickCount
     *
     * @param integer $clickCount
     * @return Offer
     */
    public function setClickCount($clickCount)
    {
        $this->clickCount = $clickCount;

        return $this;
    }

    /**
     * Get clickCount
     *
     * @return integer 
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * Set downloadCount
     *
     * @param integer $downloadCount
     * @return Offer
     */
    public function setDownloadCount($downloadCount)
    {
        $this->downloadCount = $downloadCount;

        return $this;
    }

    /**
     * Get downloadCount
     *
     * @return integer 
     */
    public function getDownloadCount()
    {
        return $this->downloadCount;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Offer
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set moderated
     *
     * @param boolean $moderated
     * @return Offer
     */
    public function setModerated($moderated)
    {
        $this->moderated = $moderated;

        return $this;
    }

    /**
     * Get moderated
     *
     * @return boolean 
     */
    public function getModerated()
    {
        return $this->moderated;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return Offer
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string 
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}
