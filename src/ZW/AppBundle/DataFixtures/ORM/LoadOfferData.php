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
        $offer->setOfferId(1);
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
        $offer->setImageUrl('u114_normal.jpg');


        $this->addReference('offer', $offer);


        $offer2 = new Offer();
        $offer2->setOfferId(1686);
        $offer2->setName('Existed offer with outdated data');
        $offer2->setDescription('Fucking amazing offer for many unhappy people! CYA!');
        $offer2->setPayoutType('cpa_flat');
        $offer2->setProtocol('server');
        $offer2->setExpirationDate(new \DateTime());
        $offer2->setPreviewUrl('https:\/\/play.google.com\/store\/apps\/details?id=com.baidu.browser.inter');
        $offer2->setPayout(0.1);
        $offer2->setCurrency('USD');
        $offer2->setQuota('666');
        $offer2->setClickCount('13');
        $offer2->setDownloadCount('2');
        $offer2->setImageUrl('u116_normal.jpg');
        // $offer2->setModerated(true);
        // $offer2->setEnabled(true);


        $this->addReference('offer2', $offer2);

        $manager->persist($offer);
        $manager->persist($offer2);
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