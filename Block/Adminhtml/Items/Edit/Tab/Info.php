<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Block\Adminhtml\Items\Edit\Tab;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Tab\TabInterface;

class Info extends Generic implements TabInterface
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
        return __('Store Information');
    }

    /**
     * {@inheritdoc}
     */
    public function getTabTitle()
    {
        return __('Store Information');
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
        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Store Information')]);

        if ($model->getId()) {
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        }
        
        $starttime = [];
        $starttime = $this->hoursRange();
        $fieldset->addField(
        'mon_from', 
        'select',
        [
            'label' => __("Monday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'mon_from',
            'value' => $model->getMonFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'mon_to', 
        'select',
        [
            'label' => __("Monday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'mon_to',
            'value' => $model->getMonTo(),
            'values' => $starttime
        ]);

         $fieldset->addField(
        'tue_from', 
        'select',
        [
            'label' => __("Tuesday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'tue_from',
            'value' => $model->getTueFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'tue_to', 
        'select',
        [
            'label' => __("Tuesday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'tue_to',
            'value' => $model->getTueTo(),
            'values' => $starttime
        ]);


        $fieldset->addField(
        'wed_from', 
        'select',
        [
            'label' => __("Wednesday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'wed_from',
            'value' => $model->getWedFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'wed_to', 
        'select',
        [
            'label' => __("Wednesday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'wed_to',
            'value' => $model->getWedTo(),
            'values' => $starttime
        ]);


        $fieldset->addField(
        'thur_from', 
        'select',
        [
            'label' => __("Thursday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'thur_from',
            'value' => $model->getThurFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'thur_to', 
        'select',
        [
            'label' => __("Thursday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'thur_to',
            'value' => $model->getThurTo(),
            'values' => $starttime
        ]);


        $fieldset->addField(
        'fri_from', 
        'select',
        [
            'label' => __("Friday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'fri_from',
            'value' => $model->getFriFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'fri_to', 
        'select',
        [
            'label' => __("Friday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'fri_to',
            'value' => $model->getFriTo(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'sat_from', 
        'select',
        [
            'label' => __("Saturday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'sat_from',
            'value' => $model->getSatFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'sat_to', 
        'select',
        [
            'label' => __("Saturday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'sat_to',
            'value' => $model->getSatTo(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'sun_from', 
        'select',
        [
            'label' => __("Sunday From"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'sun_from',
            'value' => $model->getSunFrom(),
            'values' => $starttime
        ]);

        $fieldset->addField(
        'sun_to', 
        'select',
        [
            'label' => __("Sunday To"),
            'class' => 'required-entry',
            'required' => 'false',
            'name' => 'sun_to',
            'value' => $model->getSunTo(),
            'values' => $starttime
        ]);

        $fieldset->addField(
            'image',
            'image',
            [
                'name' => 'image',
                'label' => __('Image'),
                'title' => __('Image'),
                'required'  => false
            ]
        );




        $form->setValues($model->getData());
        $this->setForm($form);
        return parent::_prepareForm();
    }


    protected function hoursRange( $start = 0, $end = 86400, $step = 3600, $format = 'g:i A' ) {
        $times = [];
        $times['closed'] = 'Closed';
        foreach ( range( $start, $end, $step ) as $timestamp ) {
                $hour_mins = gmdate( 'g:i A', $timestamp );
                if ( ! empty( $format ) )
                        $times[$hour_mins] = gmdate( $format, $timestamp );
                else $times[$hour_mins] = $hour_mins;
        }
        return $times;
    }
}
