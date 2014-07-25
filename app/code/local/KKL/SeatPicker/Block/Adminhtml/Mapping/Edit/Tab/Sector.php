<?php

class KKL_SeatPicker_Block_Adminhtml_Mapping_Edit_Tab_Sector extends Mage_Adminhtml_Block_Widget_Container
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('seat_picker/mapping/sector.phtml');
    }

    public function getSectors()
    {
        $options = unserialize(Mage::getStoreConfig('kkl/kkl_group/sectors'));

        return $options;
    }

    public function getSectorMapping()
    {
        $mapping = Mage::getModel('kkl_seatpicker/mapping')->getCollection()->getMappingByType('sector');

        return $mapping;
    }
}