<?php

namespace ZW\ApiBundle\Client\Command;

use Guzzle\Service\Command\OperationCommand;
use Misd\GuzzleBundle\Service\Command\JMSSerializerAwareCommandInterface;
use JMS\Serializer\SerializerInterface;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class DeserializeCommand extends OperationCommand implements JMSSerializerAwareCommandInterface
{
    public $serializer;

    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function process()
    {
        $this->result = $this->serializer->deserialize(
            $this->request->getResponse()->getBody(true),
            $this->getOperation()->getResponseClass(),
            'json'
        );
    }
}
