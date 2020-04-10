<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo 
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Block\Adminhtml\Items\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('techmitraa_storeinfo_items_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Store Information'));
    }
}
