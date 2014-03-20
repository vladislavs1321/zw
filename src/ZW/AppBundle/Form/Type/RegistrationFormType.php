<?php

namespace ZW\AppBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class RegistrationFormType extends BaseType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('country', 'country', array(
                'label' => 'Старна:',
                'error_bubbling' => true,

                'choices' => array(
                   'BY' => \Symfony\Component\Intl\Intl::getRegionBundle()->getCountryName('BY', 'ru'),
                   'RU' => \Symfony\Component\Intl\Intl::getRegionBundle()->getCountryName('RU', 'ru'),
                   'UA' => \Symfony\Component\Intl\Intl::getRegionBundle()->getCountryName('UA', 'ru'),
                )
            ))
            ->add('phone', null, array(
                'label' => 'Мобильный телефон:',
                'attr' => array('placeholder' => '+7 (...) ... .. ..'),
            ))
            ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    
                    'first_options' => array(
//                        'attr' => array('placeholder' => 'form.placeholder.password'),
                        'label' => 'Пароль:',
                        'error_bubbling' => true,
                    ),
                    'second_options' => array(
//                        'attr' => array('placeholder' => 'form.placeholder.confirm_password'),
                        'label' => 'Подтвердите пароль:',
                        'error_bubbling' => true
                    ),
                    'invalid_message' => 'fos_user.password.mismatch',
                )
            )
            ->add('email', 'email', array(
                'label' => 'Email:',
                'error_bubbling' => true
            ))
            ->add('devices', 'entity', array(
                'label' => 'Устройство',
                'class' => 'ZWAppBundle:Device',
                'multiple'  => true, 
                'expanded' => true
            ))
        ;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'zw_app_registration';
    }
}