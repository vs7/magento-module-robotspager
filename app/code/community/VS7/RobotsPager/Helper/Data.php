<?php

class VS7_RobotsPager_Helper_Data extends Mage_Core_Helper_Abstract {
    public function getRobotsPager()
    {
        $params = Mage::app()->getFrontController()->getRequest()->getParams();
        if (
            !empty($params)
            && array_key_exists('p', $params)
        ) {
            return 'NOINDEX,FOLLOW';
        }

        return null;
    }
}