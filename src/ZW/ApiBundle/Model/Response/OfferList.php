<?php

namespace ZW\ApiBundle\Model\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class OfferList
{
    /**
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    private $success;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $rows;

    /**
     * @Serializer\Type("array<string, array<ZW\ApiBundle\Model\Response\Offer>>")
     *
     * @var array
     */
    private $data = array();

    /**
     * @return array
     */
    public function getOffers()
    {
        return isset($this->data['offers'])
            ? $this->data['offers']
            : array()
        ;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @return string
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
