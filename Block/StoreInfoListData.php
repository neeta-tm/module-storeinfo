<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Block;

use Magento\Framework\View\Element\Template\Context;
use TechMitraa\StoreInfo\Model\StoreInfoFactory;
use TechMitraa\StoreInfo\Helper\Data;

/**
 * StoreInfo List block
 */
class StoreInfoListData extends \Magento\Framework\View\Element\Template
{

    /**
     * @var StoreInfo
     */
    protected $_storeinfo;
    
    protected $helper; 

    public function __construct(
        Context $context,
        StoreInfoFactory $storeinfo, 
        Data $helper
    ) {
        $this->_storeinfo = $storeinfo;
        $this->helper = $helper;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $title = $this->helper->getGeneralConfig('page_title');
        $this->pageConfig->getTitle()->set(__($title));
        
        if ($this->getStoreInfoCollection()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'techmitraa.storeinfo.pager'
            )->setAvailableLimit(array(6=>6,9=>9,12=>12))->setShowPerPage(true)->setCollection(
                $this->getStoreInfoCollection()
            );
            $this->setChild('pager', $pager);
            $this->getStoreInfoCollection()->load();
        }
        return parent::_prepareLayout();
    }

    public function getStoreInfoCollection()
    {
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 6;

        $storeinfo = $this->_storeinfo->create();
        $collection = $storeinfo->getCollection();
        $collection->addFieldToFilter('status','1');
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);
        return $collection;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }

    public function getHoursTitle()
    {
        $title = $this->helper->getGeneralConfig('store_hours_title');
        return $title;
    }

    public function getMediaUrl()
    {
        $mediaUrl = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        return $mediaUrl;
    }
}