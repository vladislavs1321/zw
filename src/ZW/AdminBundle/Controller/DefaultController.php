<?php

namespace ZW\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZWAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
