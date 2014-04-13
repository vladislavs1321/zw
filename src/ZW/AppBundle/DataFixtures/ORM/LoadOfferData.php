<?php

namespace ZW\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use ZW\AppBundle\Entity\Offer;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class LoadOfferData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $offer = new Offer();
        $offer->setName('CoolOffer');
        $offer->setDescription('Fucking amazing offer for many unhappy people! CYA!');
        $offer->setPayoutType('cpa_flat');
        $offer->setProtocol('server');
        $offer->setExpirationDate(new \DateTime());
        $offer->setPreviewUrl('https:\/\/play.google.com\/store\/apps\/details?id=com.baidu.browser.inter');
        $offer->setPayout(0.26);
        $offer->setCurrency('USD');
        $offer->setQuota('123');
        $offer->setClickCount('30');
        $offer->setDownloadCount('10');


        $this->addReference('offer-country', $offer);
        $this->addReference('offer-category', $offer);

        $manager->persist($offer);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 20;
    }
}