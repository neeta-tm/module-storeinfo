<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Controller\Adminhtml\Items;

class Edit extends \TechMitraa\StoreInfo\Controller\Adminhtml\Items
{

    public function execute()
    {
        $model = $this->_objectManager->create('TechMitraa\StoreInfo\Model\StoreInfo');

        $id = $this->getRequest()->getParam('id');

        $this->resultPage = $this->resultPageFactory->create();



        if ($id) {
            $model->load($id);

            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('techmitraa_storeinfo/*');
                return;
            }else {
                $this->resultPage->getConfig()->getTitle()->set((__('Edit Store Information '.$model->getStorename())));

            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_techmitraa_storeinfo_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('items_items_edit');
        $this->_view->renderLayout();
    }
}
