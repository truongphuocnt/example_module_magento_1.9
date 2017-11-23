<?php
/**
 * Class Phuocntt_Example_Adminhtml_Example_CustomController
 * @Author Phuoc Nguyen<truongphuocnt@gmail.com>
 */
class Phuocntt_Example_Adminhtml_Example_CustomController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        //ZDEBUG
        echo '<pre>';
        var_dump('Mi vua click vao index do');
        echo '</pre>';
        exit('<span style="color:red">'.__FILE__.'('.__LINE__.')');
        //END ZDEBUG

    }

    public function listAction()
    {
        $this->loadLayout()
            ->_addContent(
                $this->getLayout()
                    ->createBlock('phuocntt_example/adminhtml_example_custom'))
            ->renderLayout();
    }

    public function viewAction()
    {
        //ZDEBUG
        echo '<pre>';
        var_dump($this->getRequest()->getParams());
        echo '</pre>';
        exit('<span style="color:red">'.__FILE__.'('.__LINE__.')');
        //END ZDEBUG
    }

    public function Action()
    {
        //ZDEBUG
        echo '<pre>';
        var_dump($this->getRequest()->getParams());
        echo '</pre>';
        exit('<span style="color:red">'.__FILE__.'('.__LINE__.')');
        //END ZDEBUG
    }
}