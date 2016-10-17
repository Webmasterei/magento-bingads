<?php

class Webmasterei_Bingads_Block_Success
    extends Mage_Checkout_Block_Onepage_Success
{
    /**
     * Initialize entity model
     */
    protected function getBingadsConversionAmout()
    {
        $sOrderId = Mage::getSingleton('checkout/session')->getLastOrderId();
        $order = Mage::getModel('sales/order')->load($sOrderId);
        $grand_total = $order->getData('grand_total');
        return $grand_total;
    }
}