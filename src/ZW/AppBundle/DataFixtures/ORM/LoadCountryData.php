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
        $country->setName('RU');
        $country->setOffer($this->getReference('offer-country'));

        $country2 = new Country();
        $country2->setName('EN');
        $country2->setOffer($this->getReference('offer-country'));

        $country3 = new Country();
        $country3->setName('EN');
        $country3->setOffer($this->getReference('offer2-country'));

        $manager->persist($country);
        $manager->persist($country2);
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