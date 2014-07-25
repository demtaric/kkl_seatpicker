<?php

class KKL_SeatPicker_Model_Resource_Mapping extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('kkl_seatpicker/mapping', 'mapping_id');
    }
}