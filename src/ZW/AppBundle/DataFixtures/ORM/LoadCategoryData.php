<?php

namespace ZW\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use ZW\AppBundle\Entity\Category;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Android');
        $category->addOffer($this->getReference('offer'));

        $category2 = new Category();
        $category2->setName('iPad');
        $category2->addOffer($this->getReference('offer2'));
    

        $manager->persist($category);
        $manager->persist($category2);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 30;
    }
}