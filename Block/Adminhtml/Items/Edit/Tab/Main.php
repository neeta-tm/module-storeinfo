<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Block\Adminhtml\Items\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;

class Main extends Generic implements TabInterface
{
    protected $_wysiwygConfig;
 
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, 
        \Magento\Framework\Registry $registry, 
        \Magento\Framework\Data\FormFactory $formFactory,  
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, 
        array $data = []
    ) 
    {
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getTabLabel()
    {
        return __('General Information');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('General Information');
    }

    /**
     * {@inheritdoc}
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden()
    {
        return false;
    }

    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('current_techmitraa_storeinfo_items');
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('store_');
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('General Information')]);

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        $fieldset->addField(
            'storename',
            'text',
            ['name' => 'storename', 'label' => __('Store Name'), 'title' => __('Store Name'), 'required' => true]
        );
        $fieldset->addField(
            'store_address',
            'textarea',
            ['name' => 'store_address', 'label' => __('Store Address'), 'title' => __('Store Address Line 1'), 'required' => true]
        );   

         $fieldset->addField(
            'store_description',
            'textarea',
            ['name' => 'store_description', 'label' => __('Store Description'), 'title' => __('Store Description Line'), 'required' => false]
        );       
        $fieldset->addField(
            'phone_number',
            'text',
            ['name' => 'phone_number', 'label' => __('Phone Number'), 'title' => __('Phone Number'), 'required' => true,'class' => 'validate-number']
        );   

        $fieldset->addField(
            'status', 
            'select',
            array(
                'label' => __("Status"),
                'class' => 'required-entry',
                'required' => 'true',
                'name' => 'status',        
                'value' => $model->getStatus(),
                'values'    => [
                    ['label' => 'Please Select', 'value' => ''],
                    ['label' => 'Enabled', 'value' => 1],
                    ['label' => 'Disabled', 'value' => 0]
                ]
            )
        );

        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
