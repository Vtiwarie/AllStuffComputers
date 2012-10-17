<?php

/****************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file retrieves the best-selling portable hard drives from Amazon via
 * its product advertising api, and delivers them to the view for display
 ****************************************************************************/

class HddController extends Zend_Controller_Action {

    public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;
        $this->category = 'portable hard drive';
        $this->view->producttype = 'External Hard Drives';
    }

    public function buffaloAction() {
        $this->view->brand = 'Buffalo';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function hpAction() {
        $this->view->brand = 'HP';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function iomegaAction() {
        $this->view->brand = 'Iomega';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function kingstonAction() {
        $this->view->brand = 'Kingston';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function lacieAction() {
        $this->view->brand = 'LaCie';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function seagateAction() {
        $this->view->brand = 'Seagate';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function synologyAction() {
        $this->view->brand = 'Synology';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function toshibaAction() {
        $this->view->brand = 'Toshiba';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function transcendAction() {
        $this->view->brand = 'Transcend';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function verbatimAction() {
        $this->view->brand = 'Verbatim';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

    public function westerndigitalAction() {
        $this->view->brand = 'Western Digital';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}

