<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Block\Adminhtml\StoreInfo\Edit;


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class Save extends GenericButton implements ButtonProviderInterface
{

    public function getButtonData()
    {
        $id = $this->getId();
        $url = $this->getUrl('*/*/save', ['id' => $id]);

        return [
            'label' => __('Save111'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
            'url' => $url
        ];
    }
}
