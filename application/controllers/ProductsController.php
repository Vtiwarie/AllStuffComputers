<?php

/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Products controller creates, and maintains all Amazon products
 * listed in the database
 ******************************************************************************/


class ProductsController extends Zend_Controller_Action
{

     public function init() {
        $this->em = $this->_helper->EntityManager();
        $this->amazonAssociateId = Zend_Registry::get('config')->amazon->associate_id;

    }

    public function laptopsAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'laptop';
        $this->view->producttype = ucfirst($this->category). 's';
        $laptop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $laptop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }
    
    public function desktopsAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'desktop';
        $this->view->producttype = ucfirst($this->category). 's';
        $desktop = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $desktop;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;   }

    public function tabletsAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'tablet';
        if($this->view->brand == 'Amazon')
            $this->category = 'kindle';
        $this->view->producttype = ucfirst($this->category). 's';
        $tablet = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $tablet;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }
    
    public function hddAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'portable hard drive';
        $this->view->producttype = ucfirst($this->category). 's';
        $hdd = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $hdd;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }
    
    public function printersAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'printer scanner';
        $this->view->producttype = ucfirst('printers & scanners');
        $printer = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $printer;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }
    
    public function monitorsAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'monitor';
        $this->view->producttype = ucfirst($this->category). 's';
        $monitor = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $monitor;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }
    
    public function routersAction()
    {
        $this->view->brand = ucfirst($this->getRequest()->getParam('brand'));
        $this->category = 'router';
        $this->view->producttype = ucfirst($this->category). 's';
        $router = $this->em->getRepository('Entities\AmazonProducts')->findByCategoryAndBrand($this->category, $this->view->brand);
        $this->view->result = $router;
        $this->view->pageTitle = 'AllStuffComputers - ' . $this->view->brand . ' ' . $this->view->producttype;
    }

}



