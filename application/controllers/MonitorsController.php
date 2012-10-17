<?php

/*************************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file retrieves the best-selling computer monitors from Amazon via
 * its product advertising api, and delivers them to the view for display
 *************************************************************************************/

class MonitorsController extends Zend_Controller_Action {

    public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;
        $this->category = 'monitor';
        $this->view->producttype = 'Monitors';
    }

    public function indexAction() {
        
    }

    public function acerAction() {
        $this->view->brand = 'Acer';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function appleAction() {
        $this->view->brand = 'Apple';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function asusAction() {
        $this->view->brand = 'Asus';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function dellAction() {
        $this->view->brand = 'Dell';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function gatewayAction() {
        $this->view->brand = 'Gateway';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function hpAction() {
        $this->view->brand = 'HP';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function lenovoAction() {
        $this->view->brand = 'Lenovo';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function panasonicAction() {
        $this->view->brand = 'Panasonic';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function samsungAction() {
        $this->view->brand = 'Samsung';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function sonyAction() {
        $this->view->brand = 'Sony';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function toshibaAction() {
        $this->view->brand = 'Toshiba';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function viewsonicAction() {
        $this->view->brand = 'Viewsonic';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}

