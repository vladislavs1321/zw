<?php

namespace ZW\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use ZW\AppBundle\Entity\Device;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class LoadLanguageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $device1 = new Device();
        $device1->setType(Device::TYPE_ANDROID);
        $manager->persist($device1);

        $device2 = new Device();
        $device2->setType(Device::TYPE_IPHONE);
        $manager->persist($device2);

        $device3 = new Device();
        $device3->setType(Device::TYPE_IPAD);
        $manager->persist($device3);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }
}