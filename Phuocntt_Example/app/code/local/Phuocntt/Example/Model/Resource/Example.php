<?php
/**
 * Class Phuocntt_Example_Model_Resource_Example
 * @Author Phuoc Nguyen<truongphuocnt@gmail.com>
 */
class Phuocntt_Example_Model_Resource_Example extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('phuocntt_example/example', 'entity_id');
    }
}