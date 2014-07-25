<?php

class KKL_SeatPicker_Block_Adminhtml_Mapping_Edit_Tab_Location extends Mage_Adminhtml_Block_Widget_Container
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('seat_picker/mapping/location.phtml');
    }

    public function getLocations()
    {
        $options = unserialize(Mage::getStoreConfig('kkl/kkl_group/locations'));

        return $options;
    }

    public function getLocationMapping()
    {
        $mapping = Mage::getModel('kkl_seatpicker/mapping')->getCollection()->getMappingByType('location');

        return $mapping;
    }

}