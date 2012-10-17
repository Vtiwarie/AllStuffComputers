<?php

/* * ***********************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file retrieves the best-selling tablets from Amazon via
 * its product advertising api, and delivers them to the view for display
 ****************************************************************************/

class TabletsController extends Zend_Controller_Action {

    public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;
        $this->category = 'tablet';
        $this->view->producttype = 'Tablets';
    }

    public function acerAction() {
        $this->view->brand = 'Acer';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function amazonAction() {
        $this->view->brand = 'Amazon';
        $this->category = 'kindle';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function appleAction() {
        $this->view->brand = 'Apple';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function archosAction() {
        $this->view->brand = 'Archos';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function asusAction() {
        $this->view->brand = 'Asus';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function atcAction() {
        $this->view->brand = 'ATC';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function blackberryAction() {
        $this->view->brand = 'Blackberry';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function dellAction() {
        $this->view->brand = 'Dell';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function googleAction() {
        $this->view->brand = 'Google';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function hpAction() {
        $this->view->brand = 'HP';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function htcAction() {
        $this->view->brand = 'HTC';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function oemAction() {
        $this->view->brand = 'OEM Systems';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function motorolaAction() {
        $this->view->brand = 'Motorola';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function samsungAction() {
        $this->view->brand = 'Samsung';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function sonyAction() {
        $this->view->brand = 'Sony';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function toshibaAction() {
        $this->view->brand = 'Toshiba';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function viewsonicAction() {
        $this->view->brand = 'ViewSonic';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}

