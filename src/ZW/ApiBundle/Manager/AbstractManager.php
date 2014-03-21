<?php

namespace ZW\ApiBundle\Manager;

use Guzzle\Service\ClientInterface;
use ZW\ApiBundle\Model\Response\BaseResponse;

abstract class AbstractManager
{
    /**
     * @var \Guzzle\Service\ClientInterface
     */
    protected $client;

    /**
     * @var \Guzzle\Service\Command\CommandInterface
     */
    protected $command = null;

    /**
     * @param \Guzzle\Service\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param $commandName
     * @param object $requestData
     * @return BaseResponse|mixed
     */
    protected function call($commandName, $requestData)
    {
        $this->command = $this->client->getCommand(
            $commandName,
            (array) $requestData
        );

        return $this->execute();
    }

    /**
     * Execute request to bancbox api
     *
     * @return \FundingWonder\BancBoxBundle\Model\Response\BaseResponse|mixed
     * @throws \RuntimeException
     */
    protected function execute()
    {
        if (null === $this->command) {
            throw new \RuntimeException('Guzzle command not initialized');
        }

        try {
            $result = $this->command->execute();
        } catch(\Guzzle\Service\Exception\ValidationException $e) {
            $result = new BaseResponse();
            $result->setError('VALIDATION-EXCEPTION', print_r($e->getErrors(), true));
        }

        return $result;
    }
}
