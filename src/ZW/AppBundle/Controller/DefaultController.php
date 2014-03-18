<?php

namespace ZW\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZWAppBundle:Default:index.html.twig', array('name' => $name= 111));
    }
}
