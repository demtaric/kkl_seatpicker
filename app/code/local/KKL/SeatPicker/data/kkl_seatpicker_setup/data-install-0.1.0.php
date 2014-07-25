<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$mappingData = array(
    array(
        'type'     => 'sector',
        'mapping'  => '',
    ),
    array(
        'type'     => 'location',
        'mapping'  => '',
    ),
);

foreach ($mappingData as $bind) {
    Mage::getModel('kkl_seatpicker/mapping')->setData($bind)->save();
}
