<?php

/*********************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: This file displays the about, contact, and home pages
 *********************************************************************/

class InfoController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function homeAction() {
        // action body
    }

    public function aboutAction() {
        // action body
    }

    public function contactAction() {
        $form = new Application_Model_FormContact();
        $post = $this->_request->getPost();
        //check if form has been sent
        if ($this->getRequest()->isPost()) {
            //check if form is valid
            if ($form->isValid($this->getRequest()->getPost())) {
                //send the email
                try {
                    Zend_Mail::setDefaultReplyTo($post['email'], $post['name']);

                    $mail = new Zend_Mail();


                    $mail->setFrom($post['email']);
                    $mail->addTo(Zend_Registry::get('config')->email->username);
                    $mail->setSubject("ALLSTUFFCOMPUTERS - message from {$post['name']}");
                    $mail->setBodyText($post['message']);
                    $mail->setBodyHtml($_POST['message']);
                    $mail->send();
                    $this->_helper->flashMessenger->addMessage(Zend_Registry::get('config')->messages->contact->successful);
                    $this->view->messages = $this->_helper->flashMessenger->getMessages();
                } catch (Zend_Mail_Exception $e) {

                    $this->view->errors = array(array("There was a problem sending your email..."));
                    // $this->view->errors = array(array($e->getMessage()));
                }
            } else {
                $this->view->errors = $form->getErrors();
            }
        }

        $this->view->form = $form;
    }

}

