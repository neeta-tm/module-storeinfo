<?php
/**
 * @category   TechMitraa
 * @package    TechMitraa_StoreInfo
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace TechMitraa\StoreInfo\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
		$installer = $setup;
		$installer->startSetup();

		/**
		 * Creating table techmitraa_storeinfo
		 */
		$table = $installer->getConnection()->newTable($installer->getTable('techmitraa_storeinfo'))
		->addColumn(
			'id',
			Table::TYPE_INTEGER,
			255,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'ID'
		)->addColumn(
			'storename',
			Table::TYPE_TEXT,
			255,
			['nullable' => false,],
			'Store Name'
		)->addColumn(
			'store_address',
			Table::TYPE_TEXT,
			255,
			['nullable' => false],
			'Store Address'
		)->addColumn(
			'store_description',
			Table::TYPE_TEXT,
			255,
			['nullable' => false],
			'Store Description'
		)->addColumn(
			'phone_number',
			Table::TYPE_INTEGER,
			10,
			['nullable' => true],
			'Phone Number'
		)->addColumn(
			'status',
			Table::TYPE_BOOLEAN,
			1,
			[ 'nullable' => false],
			'Status'
		)->addColumn(
			'mon_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Monday From'
		)->addColumn(
			'mon_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Monday To'
		)->addColumn(
			'tue_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Tuesday From'
		)->addColumn(
			'tue_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Tuesday To'
		)->addColumn(
			'wed_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Wednesday from'
		)->addColumn(
			'wed_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Wednesday To'
		)->addColumn(
			'thur_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Thursday From'
		)->addColumn(
			'thur_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Thursday To'
		)->addColumn(
			'fri_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Friday From'
		)->addColumn(
			'fri_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Friday To'
		)->addColumn(
			'sat_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Saturday From'
		)->addColumn(
			'sat_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Saturday To'
		)->addColumn(
			'sun_from',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Sunday from'
		)->addColumn(
			'sun_to',
			Table::TYPE_TEXT,
			10,
			['nullable' => true],
			'Operation Hours Sunday To'
		)->addColumn(
			'image',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'Image'
		)->addColumn(
			'created_at',
			Table::TYPE_TIMESTAMP,
			10,
			['nullable' => false],
			'Created At'
		)->addColumn(
			'updated_at',
			Table::TYPE_TIMESTAMP,
			10,
			['nullable' => false],
			'Updated At'
		);

		$installer->getConnection()->createTable($table);
		$installer->endSetup();
	}
}