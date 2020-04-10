<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Controller\Index;

class ListAction extends \Magento\Framework\App\Action\Action
{
	public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
