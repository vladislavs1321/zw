<?php

namespace ZW\ApiBundle\Model\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class Offer
{
    /**
     * Seperator symbol of multiple data fields like categories, countries etc..
     * @var string
     */
    const PLURAL_DATA_SEPARATOR = ',';

    /**
     * @Serializer\SerializedName("id")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $offerId;

    /**
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @Serializer\SerializedName("description")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $description;

    /**
     * @Serializer\SerializedName("payout_type")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $payoutType;

    /**
     * @Serializer\SerializedName("protocol")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $protocol;

    /**
     * @Serializer\SerializedName("expiration_date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     *
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @Serializer\SerializedName("preview_url")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $previewUrl;

    /**
     * @Serializer\SerializedName("currency")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $currency;

    /**
     * @Serializer\SerializedName("tracking_url")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $trackingUrl;

    /**
     * @Serializer\SerializedName("payout")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $payout;

    /**
     * @Serializer\SerializedName("categories")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $categories;

    /**
     * @Serializer\SerializedName("countries")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $countries;

    /**
     * @Serializer\SerializedName("countries_short")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $countriesShort;

    /**
     * @return string
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPayoutType()
    {
        return $this->payoutType;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @return string
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @return array
     */
    public function getCategories()
    {
        return explode(
            self::PLURAL_DATA_SEPARATOR,
            $this->categories
        );
    }

    /**
     * @return array
     */
    public function getCountries()
    {
        return array_map(
            'trim',
            explode(
                self::PLURAL_DATA_SEPARATOR,
                $this->countries
            )
        );
    }

    /**
     * @return string|null
     */
    public function getCountryByIndex($index)
    {
        $countries = explode(
            self::PLURAL_DATA_SEPARATOR,
            $this->countries
        );

        if (!isset($countries[$index])) {
            return null;
        }

        return trim($countries[$index]);
    }

    /**
     * @return array
     */
    public function getCountriesShort()
    {
        return array_map(
            'trim',
            explode(
                self::PLURAL_DATA_SEPARATOR,
                $this->countriesShort
            )
        );
    }
}
