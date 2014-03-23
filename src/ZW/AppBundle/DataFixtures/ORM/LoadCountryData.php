<?php

namespace ZW\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use ZW\AppBundle\Entity\Country;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class LoadCountryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $country = new Country();
        $country->setShortName('RU');
        $country->addOffer($this->getReference('offer'));
        $manager->persist($country);

        $country2 = new Country();
        $country2->setShortName('EN');
        $country2->addOffer($this->getReference('offer'));
        $country2->addOffer($this->getReference('offer2'));
        $manager->persist($country2);

        $country3 = new Country();
        $country3->setShortName('ID');
        $country3->addOffer($this->getReference('offer2'));
        $manager->persist($country3);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 40;
    }
}