<?php

namespace ZW\AppBundle\ApiBridge\Manager;

use ZW\AppBundle\ApiBridge\Transformer\KatanaAdsOfferToEntityTransformer;
use ZW\ApiBundle\Model\Response\Offer as ApiOffer;
use ZW\AppBundle\Entity\Offer;
use ZW\AppBundle\Entity\Category;
use ZW\AppBundle\Entity\Country;

/**
 * @author varloc2000 <varloc2000@gmail.com>
 */
class KatanaAdsManager extends AbstractManager
{
    private $entityMetadata;

    public function setEntityMetadata($entityMetadata)
    {
        $this->entityMetadata = $entityMetadata;
    }

    public function getOffers()
    {
        return $this->getEntityManager()
            ->getRepository('ZW\AppBundle\Entity\Offer')
            ->findAll();
    }

    /**
     * Import offers with all referenced entities
     */
    public function importOffers()
    {
        $this->setEntityMetadata(
            $this->getEntityManager()->getClassMetadata('ZW\AppBundle\Entity\Offer')
        );

        $offerList = $this->apiManager->getOfferList();

        foreach ($offerList->getOffers() as $offer) {

            $existedOffer = $this->getEntityManager()
                ->getRepository('ZW\AppBundle\Entity\Offer')
                ->findOneByOfferId($offer->getOfferId());

            $offerEntity = $this->fillEntityFromKatanaOffer($offer, $existedOffer);

            // Do update existing offer entity or save new offer
            $this->getEntityManager()->persist($offerEntity);
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param ZW\ApiBundle\Model\Response\Offer $offer
     * @param ZW\AppBundle\Entity\Offer $offerEntity
     */
    private function fillEntityFromKatanaOffer(ApiOffer $offer, Offer $offerEntity = null)
    {
        if (null === $offerEntity) {
            $offerEntity = new Offer();
        }

        // Transfer entity simple fields data
        foreach ($this->entityMetadata->getFieldNames() as $simpleEntityField) {

            $getter = 'get' . ucfirst($simpleEntityField);

            if (method_exists($offer, $getter)) {
                $value = $offer->{$getter}();

                $this->entityMetadata->setFieldValue(
                    $offerEntity,
                    $simpleEntityField,
                    $value
                );
            }
        }

        $this->importCountriesFromOffer($offer, $offerEntity);

        $this->importCategoriesFromOffer($offer, $offerEntity);

        return $offerEntity;
    }

    /**
     * @param ZW\ApiBundle\Model\Response\Offer $offer
     * @param ZW\AppBundle\Entity\Offer $offerEntity
     */
    protected function importCountriesFromOffer(ApiOffer $offer, Offer $offerEntity)
    {
        $countriesCollection = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($offer->getCountriesShort() as $index => $offerCountryShort) {

            $countryEntity = $this->getEntityManager()
                ->getRepository('ZW\AppBundle\Entity\Country')
                ->findOneByShortName($offerCountryShort);

            if (null == $countryEntity) {
                $countryEntity = new Country();

                $countryEntity->setShortName($offerCountryShort);
                $countryEntity->setName($offer->getCountryByIndex($index));
            }

            $countriesCollection->add($countryEntity);
        }

        $offerEntity->setCountries($countriesCollection);
    }

    /**
     * @param ZW\ApiBundle\Model\Response\Offer $offer
     * @param ZW\AppBundle\Entity\Offer $offerEntity
     */
    protected function importCategoriesFromOffer(ApiOffer $offer, Offer $offerEntity)
    {
        $categoriesCollection = new \Doctrine\Common\Collections\ArrayCollection();

        foreach ($offer->getCategories() as $offerCategory) {

            $categoryEntity = $this->getEntityManager()
                ->getRepository('ZW\AppBundle\Entity\Category')
                ->findOneByName($offerCategory);

            if (null == $categoryEntity) {
                $categoryEntity = new Category();

                $categoryEntity->setName($offerCategory);
            }

            $categoriesCollection->add($categoryEntity);
        }

        $offerEntity->setCategories($categoriesCollection);
    }
}
