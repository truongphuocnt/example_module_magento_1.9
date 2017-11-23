<?php
/**
 * Class Phuocntt_Example_Block_Adminhtml_Example_Custom
 * @Author Phuoc Nguyen<truongphuocnt@gmail.com>
 */
class Phuocntt_Example_Block_Adminhtml_Example_Custom extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    /**
     * Modify header & button labels
     *
     */
    public function __construct()
    {

        $this->_blockGroup = 'phuocntt_example';
        $this->_controller = 'adminhtml_example_custom';
        $this->_headerText = $this->__('Phuocntt | Manage Example');
        parent::__construct();
    }
}