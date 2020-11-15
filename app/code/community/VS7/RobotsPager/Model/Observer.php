<?php

class VS7_RobotsPager_Model_Observer
{
    public function setRobotsPager($observer)
    {
        $block = $observer->getEvent()->getBlock();

        if ($block instanceof Mage_Page_Block_Html_Head) {
            $robots = Mage::helper('vs7_robotspager')->getRobotsPager();
            $block->setRobots($robots);
        }
    }
}