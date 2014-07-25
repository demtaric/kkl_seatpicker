<?php
class KKL_SeatPicker_SeatpickerController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('seat_picker');
        $model = array();
        Mage::register('seatpicker_data', $model);
        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
        $this->renderLayout();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        if (!empty($data)) {
            try {
                list($sectorMap, $locationMap) = Mage::helper('kkl_seatpicker')->splitMapping($data);
                $mappings = Mage::getModel('kkl_seatpicker/mapping')->getCollection();
                foreach ($mappings as $mapping) {
                    if ($mapping->getType() == 'sector') {
                        $mapping->setMapping(serialize($sectorMap))->save();
                    } elseif ($mapping->getType() == 'location') {
                        $mapping->setMapping(serialize($locationMap))->save();
                    }
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('kkl_seatpicker')->__('Mapping successfully saved'));

            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('kkl_seatpicker')->__('Somethings went wrong!'));
            }
        }

        return $this->_redirect('*/*/');
    }
}