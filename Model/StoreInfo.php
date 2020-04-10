<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Model;

use Magento\Framework\Model\AbstractModel;

class StoreInfo extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('TechMitraa\StoreInfo\Model\ResourceModel\StoreInfo');
    }
}