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
class ModeratedOfferAdmin extends Admin
{
    /**
     * {@inheritdoc}
    */
    public function createQuery($context = 'list')
    {
        $qb = parent::createQuery($context = 'list');

        $qb
            ->andWhere($qb->getRootAlias() . '.moderated = :var')
            // ->andWhere($qb->getRootAlias() . '.enabled = :var2')
            ->setParameter('var', false)
            // ->setParameter('var2', false)
        ;

        return $qb;
    }

    /**
     * {@inheritDoc}
     */
    protected $baseRouteName = 'moderation_offer';

    /**
     * {@inheritDoc}
     */
    protected $baseRoutePattern = 'moderation/offer';

	/**
	 * @inheritDoc
	 */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('moderated', null, array(
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
            ->addIdentifier('moderated')
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