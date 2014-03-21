<?php

namespace ZW\ApiBundle\Model\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class Offer
{
    /**
     * @Serializer\SerializedName("id")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $id;

    /**
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;
}
