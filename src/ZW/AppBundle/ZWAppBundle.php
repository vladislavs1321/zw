<?php

namespace ZW\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZWAppBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
