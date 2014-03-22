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

        foreach ($response->getOffers() as $offer) {
            var_dump($offer->getDescription());
        }
    }
}
