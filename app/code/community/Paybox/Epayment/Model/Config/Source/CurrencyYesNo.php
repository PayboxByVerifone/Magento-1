<?php

/**
 * Paybox Epayment module for Magento
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * available at : http://opensource.org/licenses/osl-3.0.php
 *
 * @package    Paybox_Epayment
 * @copyright  Copyright (c) 2013-2014 Paybox
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Paybox_Epayment_Model_Config_Source_CurrencyYesNo {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $currencies = Mage::app()->getStore()->getAvailableCurrencyCodes();
        if (count($currencies) > 1) {
            return [['value' => 1, 'label' => __('Default store currency')], ['value' => 0, 'label' => __('Order currency')]];
        } else {
            return [['value' => 1, 'label' => __('Default store currency')]];
        }
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray() {
        return [0 => __('Order currency'), 1 => __('Default store currency')];
    }

}
