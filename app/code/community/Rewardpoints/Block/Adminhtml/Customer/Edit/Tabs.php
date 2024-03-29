<?php
/**
 * J2T RewardsPoint2
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@j2t-design.com so we can send you a copy immediately.
 *
 * @category   Magento extension
 * @package    RewardsPoint2
 * @copyright  Copyright (c) 2009 J2T DESIGN. (http://www.j2t-design.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Rewardpoints_Block_Adminhtml_Customer_Edit_Tabs extends Mage_Adminhtml_Block_Customer_Edit_Tabs
{
    protected function _beforeToHtml()
    {
        
        /*$this->addTab('rewardpoints', array(
            'label'     => Mage::helper('rewardpoints')->__('Reward Points'),
            'class'     => 'ajax',
            'url'       => $this->getUrl('rewardpoints/adminhtml_customerstats', array('_current' => true)),
        ));*/
        
        $this->addTab('rewardpoints', array(
            'label'     => Mage::helper('rewardpoints')->__('Reward Points'),
            //'content'   => $this->getLayout()->createBlock('rewardpoints/adminhtml_customerstats')->toHtml()
            'content'   => $this->getLayout()->createBlock('rewardpoints/adminhtml_customerpoints')->initForm()->toHtml()
        ));
        
        //$this->getResponse()->setBody($this->getLayout()->createBlock('rewardpoints/adminhtml_customerstats')->toHtml());

        $this->_updateActiveTab();
        return parent::_beforeToHtml();
    }
}