<?php

namespace ZW\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        if ($request->query->has('test')) {
            $manager = $this->get('zw_app.api_bridge.offer.manager');
            $manager->importOffers();
            die();
        }

        // Work with offers we do with help of manager
        // @TODO: rename manager
        $manager = $this->get('zw_app.api_bridge.offer.manager');
        $offers = $manager->getOffers();

        return $this->render('ZWAppBundle:Default:index.html.twig', array('name' => $name= 111));
    }
}
