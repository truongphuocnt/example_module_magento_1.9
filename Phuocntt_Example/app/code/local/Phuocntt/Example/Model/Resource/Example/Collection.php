<?php
/**
 * Class Phuocntt_Example_Model_Resource_Example_Collection
 * @Author Phuoc Nguyen<truongphuocnt@gmail.com>
 */
class Phuocntt_Example_Model_Resource_Example_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{

    protected function _construct()
    {
        $this->_init('phuocntt_example/example');
    }
}