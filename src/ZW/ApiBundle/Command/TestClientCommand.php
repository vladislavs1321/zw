<?php

namespace ZW\ApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\Exception\ExceptionInterface;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class TestClientCommand extends ContainerAwareCommand
{
    private static $API_KEY = '2993ab6f-3256-4ace-8d1d-614f6e216e6d';
    private static $API_SECRET = '1e22b2fa38';
    private static $API_URL = 'https://sandbox-api.bancboxcrowd.com/crowd/v0/cfp/';

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName('zw:api:katanaads:test');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start ' . $this->getName());

        $this->getKatanaAdsOfferList();
    }

    private function getKatanaAdsOfferList()
    {
        $katana = $this->getContainer()->get('zw_api.katanaads.manager');
        $response = $katana->getOfferList();

        var_dump($response);
    }
}
