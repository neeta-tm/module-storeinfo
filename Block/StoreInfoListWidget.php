<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace TechMitraa\StoreInfo\Block;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
use TechMitraa\StoreInfo\Model\StoreInfoFactory;
use TechMitraa\StoreInfo\Helper\Data;
use TechMitraa\StoreInfo\Block\StoreInfoListData;
/**
 * StoreInfo List block
 */
class StoreInfoListWidget extends StoreInfoListData implements BlockInterface 
{
   protected $_template = "widget/storelist.phtml";
}