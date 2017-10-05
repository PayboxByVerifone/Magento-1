<?php
/**
 * Paybox Epayment module for Magento
 *
 * Feel free to contact Paybox at support@paybox.com for any
 * question.
 *
 * LICENSE: This source file is subject to the version 3.0 of the Open
 * Software License (OSL-3.0) that is available through the world-wide-web
 * at the following URI: http://opensource.org/licenses/OSL-3.0. If
 * you did not receive a copy of the OSL-3.0 license and are unable
 * to obtain it through the web, please send a note to
 * support@paybox.com so we can mail you a copy immediately.
 *
 *
 * @version   3.0.4
 * @author    BM Services <contact@bm-services.com>
 * @copyright 2012-2017 Paybox
 * @license   http://opensource.org/licenses/OSL-3.0
 * @link      http://www.paybox.com/
 */

class Paybox_Epayment_Block_Admin_Presentation extends Mage_Adminhtml_Block_Template
{
    protected function _construct()
    {
        parent::_construct();

        $config = Mage::getSingleton('pbxep/config');
        $lang = Mage::app()->getLocale();
        if (!empty($lang)) {
            $lang = preg_replace('#_.*$#', '', $lang->getLocaleCode());
        }
        if (!in_array($lang, array('fr', 'en'))) {
            $lang = 'en';
        }
        $this->setTemplate('pbxep/presentation/'.$lang.'.phtml');
    }
}
