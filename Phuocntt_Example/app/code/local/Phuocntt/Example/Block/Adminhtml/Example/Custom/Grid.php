<?php

class Phuocntt_Example_Block_Adminhtml_Example_Custom_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('entity_id');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('phuocntt_example/example')->getCollection();

        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * Configuration of grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('entity_id', array(
            'header' => $this->__('ID'),
            'width' => '50px',
            'align' => 'right',
            'index' => 'entity_id',
            'filter_index'  => 'entity_id',
            'type'  => 'number',
        ));

        $this->addColumn('name', array(
            'header'    => $this->__('Name'),
            'width'     => '100',
            'index' => 'name',
            'filter_index'  => 'name',
        ));

        $this->addColumn('quantity', array(
            'header' => $this->__('quantity'),
            'width' => '50px',
            'align' => 'right',
            'index' => 'quantity',
            'type'  => 'number',
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        return Mage::helper("adminhtml")->getUrl('*/*/view', array("id" => $row->getId()));
    }

}
