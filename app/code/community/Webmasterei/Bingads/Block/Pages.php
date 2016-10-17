<?php

class Webmasterei_Bingads_Block_Pages
    extends Mage_Core_Block_Template
{
    public function getUetTag()
    {
        $uetTag = Mage::getStoreConfig('bingads/bingads_configuration/uet-tag',Mage::app()->getStore());
        return $uetTag;
    }
}