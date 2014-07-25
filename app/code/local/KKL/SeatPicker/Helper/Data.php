<?php

class KKL_SeatPicker_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function splitMapping($data)
    {
        foreach ($data as $key => $val) {
            if (preg_match('/sec_*/', $key)) {
                $sectorMap[$key] = $val;
            } elseif (preg_match('/loc_*/', $key)) {
                $locationMap[$key] = $val;
            }
        }

        return array($sectorMap, $locationMap);
    }
}