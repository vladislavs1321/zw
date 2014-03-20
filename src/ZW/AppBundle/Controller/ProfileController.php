<?php

namespace ZW\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * @author Vladislav Shishko <13thMerlin@gmail.com>
 */
class ProfileController extends Controller
{
	public function indexAction()
	{
		if (!$this->getUser()) {
			throw new AccessDeniedHttpException('You are not allowed to access this page');
		}

		return $this->render('ZWAppBundle:Profile:index.html.twig');
	}
}
