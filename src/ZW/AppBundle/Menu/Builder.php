<?php
namespace ZW\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Профиль', array('route' => 'zw_app_profile_index'));
        $menu->addChild('Приложения', array('route' => 'zw_app_profile_index'));
        $menu->addChild('F.A.Q.', array('route' => 'zw_app_profile_index'));

        // $menu->addChild('About Me', array(
        //     'route' => 'page_show',
        //     'routeParameters' => array('id' => 42)
        // ));
        // ... add more children

        return $menu;
    }
}