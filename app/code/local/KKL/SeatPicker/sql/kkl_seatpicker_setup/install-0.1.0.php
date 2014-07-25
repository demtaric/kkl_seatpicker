<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * Create table 'procommerz_russify/result'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('kkl_seatpicker/mapping'))
    ->addColumn('mapping_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('type', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'unsigned'  => true,
    ), 'Mapping Type')
    ->addColumn('mapping', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(
    ), 'Mapping')
    ->setComment('Showare to SP Mapping Table');

$installer->getConnection()->createTable($table);

$installer->endSetup();