<?php

namespace ZW\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return Symfony\Component\HttpFoundation\Response
     */
    public function importOffersAction()
    {
        $manager = $this->get('zw_app.api_bridge.offer.manager');
        $manager->importOffers();

        return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
    }
}
