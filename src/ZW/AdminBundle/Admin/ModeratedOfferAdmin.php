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
class ModeratedOfferAdmin extends Admin
{
	/**
	 * @inheritDoc
	 */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('enabled')
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