<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Model\StoreInfo;
use TechMitraa\StoreInfo\Model\ResourceModel\StoreInfo\CollectionFactory;


class DataProvider extends  \Magento\Ui\DataProvider\AbstractDataProvider
{

	    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $contactCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $contactCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $customer */
        foreach ($items as $contact) {
            // notre fieldset s'apelle "contact" d'ou ce tableau pour que magento puisse retrouver ses datas :
            $this->loadedData[$contact->getId()]['storeinfo'] = $contact->getData();
        }
       return $this->loadedData;
    }
}