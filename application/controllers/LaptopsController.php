<?php

/****************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file retrieves the best-selling laptops from Amazon via
 * its product advertising api, and delivers them to the view for display
 ****************************************************************************/

class LaptopsController extends Zend_Controller_Action {

    public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;
        $this->category = 'laptop';
        $this->view->producttype = 'Laptops';
    }

    public function acerAction() {
        $this->view->brand = 'Acer';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function alienwareAction() {
        $this->view->brand = 'Alienware';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function appleAction() {
        $this->view->brand = 'Apple';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function asusAction() {
        $this->view->brand = 'Asus';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function dellAction() {

        $this->view->brand = 'Dell';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function gatewayAction() {
        $this->view->brand = 'Gateway';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function hpAction() {
        $this->view->brand = 'HP';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function lenovoAction() {
        $this->view->brand = 'Lenovo';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function sonyAction() {
        $this->view->brand = 'Sony';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function toshibaAction() {
        $this->view->brand = 'Toshiba';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}

