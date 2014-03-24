<?php

namespace ZW\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZWAdminBundle:Default:index.html.twig', array('name' => $name));
    }


    /**
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function updateOffersAction()
    {
    	$manager = $this->get('zw_app.api_bridge.katanaads.manager');
        $manager->importOffers();

  		return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
    }
}
