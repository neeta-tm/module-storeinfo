<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Controller\Adminhtml\Items;

class NewAction extends \TechMitraa\StoreInfo\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
