<?php

/* * **********************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file retrieves the best-selling routers from Amazon via
 * its product advertising api, and delivers them to the view for display
 **************************************************************************/

class RoutersController extends Zend_Controller_Action {

    public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;
        $this->category = 'router';
        $this->view->producttype = 'Routers & Modems';
    }

    public function belkinAction() {
        $this->view->brand = 'Belkin';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function buffaloAction() {
        $this->view->brand = 'Buffalo';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function ciscoAction() {
        $this->view->brand = 'Cisco';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function dlinkAction() {
        $this->view->brand = 'D-Link';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function lgericssonAction() {
        $this->view->brand = 'LG-Ericsson';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function motorolaAction() {
        $this->view->brand = 'Motorola';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function netgearAction() {
        $this->view->brand = 'Netgear';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function tplinkAction() {
        $this->view->brand = 'TP-Link';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function trendnetAction() {
        $this->view->brand = 'TrendNet';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function westerndigitalAction() {
        $this->view->brand = 'Western Digital';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}

