<?php

/* * ************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Guide Controller keeps track of all product-buying guides for
 * the website
 ****************************************************************************/

class GuidesController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function laptopsAction()
    {
        $this->view->pageTitle = 'AllStuffComputers - Laptop Buying Guide';
    }


}



