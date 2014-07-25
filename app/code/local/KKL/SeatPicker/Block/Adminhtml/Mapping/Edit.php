<?php

class KKL_SeatPicker_Block_Adminhtml_Mapping_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'kkl_seatpicker';
        $this->_controller = 'adminhtml_mapping';
        $this->_updateButton('save', 'label', Mage::helper('kkl_seatpicker')->__('Save'));

    }

    public function getHeaderText()
    {
        return Mage::helper('kkl_seatpicker')->__('Seatpicker Mapper');
    }

}