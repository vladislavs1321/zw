<?php

namespace ZW\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Doctrine\GroupManager;
use Sonata\AdminBundle\Validator\ErrorElement;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class DisabledOfferAdmin extends Admin
{
    /**
     * {@inheritdoc}
    */
    public function createQuery($context = 'list')
    {
        $qb = parent::createQuery($context = 'list');

        $qb
            ->andWhere($qb->getRootAlias() . '.enabled = :var')
            ->setParameter('var', false)
        ;

        return $qb;
    }

    /**
     * {@inheritDoc}
     */
    protected $baseRouteName = 'disabled_offer';

    /**
     * {@inheritDoc}
     */
    protected $baseRoutePattern = 'disabled/offer';

	/**
	 * @inheritDoc
	 */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('enabled', null, array(
                'required' => false
            ))
            ->add('quota')
        ;
    }

    /**
     * @inheritDoc
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('imageUrl', null, array(
                'template' => 'ZWAdminBundle:Offer:image.html.twig'
            ))
            ->add('name')
            ->add('previewUrl', null, array(
                'template' => 'ZWAdminBundle:Offer:preview_url.html.twig'
            ))
            ->add('categories')
            ->add('countries')
            ->add('payout')
            ->add('quota')
            ->add('clickCount')
            ->add('downloadCount')
            ->add('paid', null, array(
                'template' => 'ZWAdminBundle:Offer:paid.html.twig'
            ))
            ->addIdentifier('enabled')
        ;
    }
   
}