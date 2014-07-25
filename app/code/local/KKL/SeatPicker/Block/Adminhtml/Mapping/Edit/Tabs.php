<?php

class KKL_SeatPicker_Block_Adminhtml_Mapping_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('mapping_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('kkl_seatpicker')->__('Seat Picker'));
    }

    /**
     * Add tabs before output
     *
     * @return  KKL_SeatPicker_Block_Adminhtml_Tabs
     */
    protected function _beforeToHtml()
    {
        $this->addTab('sector', array(
            'label' => Mage::helper('kkl_seatpicker')->__('Sector Mapping'),
            'title' => Mage::helper('kkl_seatpicker')->__('Sector Mapping'),
            'content' => $this->getLayout()->createBlock('kkl_seatpicker/adminhtml_mapping_edit_tab_sector')->toHtml(),
            'active'    => true,
        ));
        $this->addTab('location', array(
            'label' => Mage::helper('kkl_seatpicker')->__('Location Mapping'),
            'title' => Mage::helper('kkl_seatpicker')->__('Location Mapping'),
            'content' => $this->getLayout()->createBlock('kkl_seatpicker/adminhtml_mapping_edit_tab_location')->toHtml(),
        ));

        return parent::_beforeToHtml();
    }

}