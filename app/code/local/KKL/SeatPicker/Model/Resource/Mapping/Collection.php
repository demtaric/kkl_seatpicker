<?php

class KKL_SeatPicker_Model_Resource_Mapping_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('kkl_seatpicker/mapping');
    }

    public function getMappingByType($type)
    {
        $this->addFieldToFilter('type', $type);
        $result = array();
        foreach ($this->getItems() as $item) {
            $result = unserialize($item->getMapping());
        }

        return $result;
    }
}