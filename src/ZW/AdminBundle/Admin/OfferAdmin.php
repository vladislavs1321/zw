<?php

namespace ZW\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Doctrine\GroupManager;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Route\RouteCollection;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class OfferAdmin extends Admin
{
    /**
     * {@inheritDoc}
     */
    protected $baseRouteName = 'active_offer';

    /**
     * {@inheritDoc}
     */
    protected $baseRoutePattern = 'offer';

    /**
     * {@inheritdoc}
    */
    public function createQuery($context = 'list')
    {
        $qb = parent::createQuery($context = 'list');

        $qb
            ->andWhere($qb->getRootAlias() . '.enabled = :var')
            ->andWhere($qb->getRootAlias() . '.moderated = :var2')
            ->setParameter('var', true)
            ->setParameter('var2', true)
        ;

        return $qb;
    }

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
            ->add('payout')
            ->add('showStrategy', null, array(
                'help' => 'количество показов/день, 0(ноль) - показ без ограничений',
            ))
        ;
    }

    /**
     * @inheritDoc
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('imageUrl', null, array(
                'template' => 'ZWAdminBundle:Offer:image.html.twig',
                'route' => array('name' => 'edit')
            ))
            ->add('name')
            ->add('previewUrl', null, array(
                'template' => 'ZWAdminBundle:Offer:preview_url.html.twig'
            ))
            ->add('categories')
            ->add('countries')
            ->add('payout')
            ->add('quota')
            ->addIdentifier('showStrategy', null, array(
                'template' => 'ZWAdminBundle:Offer:show_strategy.html.twig',
                'route' => array('name' => 'edit')
            ))
            ->add('clickCount')
            ->add('downloadCount')
            ->add('paid', null, array(
                'template' => 'ZWAdminBundle:Offer:paid.html.twig'
            ))
            ->addIdentifier('enabled')
        ;
    }
    
    /**
     * @inheritDoc
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
    }
}