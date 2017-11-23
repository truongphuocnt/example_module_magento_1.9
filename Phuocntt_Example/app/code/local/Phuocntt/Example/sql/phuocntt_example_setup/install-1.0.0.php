<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$installer->run("DROP TABLE IF EXISTS {$installer->getTable('phuocntt_example/example')};");
$table = $installer->getConnection()
    ->newTable($installer->getTable('phuocntt_example/example'))
    ->addColumn('entity_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Entity Id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 50, array(
        'nullable'  => false,
        'unsigned'  => true,
    ), 'Name')
    ->addColumn('quantity', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'nullable'  => false,
        'unsigned'  => true,
    ), 'Quantity')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => true,
    ), 'Created');

$installer->getConnection()->createTable($table);

$installer->endSetup();