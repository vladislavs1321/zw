<?php

namespace ZW\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->query->has('test')) {
            $katana = $this->get('zw_api.katanaads.manager');
            $response = $katana->getOfferList();

            var_dump($response->getOffers());
        }

        return $this->render('ZWAppBundle:Default:index.html.twig', array('name' => $name= 111));
    }
}
