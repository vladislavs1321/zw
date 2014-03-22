<?php

namespace ZW\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use FOS\UserBundle\Doctrine\UserManager;
use FOS\UserBundle\Doctrine\GroupManager;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class UserAdmin extends Admin
{
	/**
	 * @inheritDoc
	 */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('enabled')
            // ->add('balance.amount')
        ;
    }

    /**
	 * @inheritDoc
	 */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id', null, array(
                'route' => array('name' => 'show'))
            )
            ->addIdentifier('username', null, array(
                'route' => array('name' => 'show'))
            )
            ->add('phone')
            ->add('balance.amount')
            ->add('balance.payout', null, array(
                'label' => 'Всего выплачено'
            ))
            ->add('ip')
            ->addIdentifier('enabled')
        ;
    }

    /**
     * @inheritDoc
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('phone')
            ->add('country')
            ->add('ip')
            ->add('balance.amount')
            ->add('balance.payout')
            ->add('devices')
            ->add('email')
            ->add('registrationDate')
        ;

    }
   
}