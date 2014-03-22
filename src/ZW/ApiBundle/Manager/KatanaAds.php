<?php

namespace ZW\ApiBundle\Manager;

class KatanaAds extends AbstractManager
{
    /**
     * @return \ZW\ApiBundle\Model\Response\BaseResponse
     */
    public function getOfferList()
    {
        return $this->call('getOfferList', new \StdClass());
    }
}
