<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Fancybox_Easings
{
    public function toOptionArray()
    {
        return array(
            'swing'    => Mage::helper('lightboxes')->__('swing'),
            'easeOutBack' => Mage::helper('lightboxes')->__('easeOutBack'),
            'easeInBack' => Mage::helper('lightboxes')->__('easeInBack'),
        );
    }
}