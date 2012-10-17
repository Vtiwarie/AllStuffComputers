<?php

class Application_Model_FormContact extends Zend_Form
{

    public function __construct($options = null)     
    {
        parent::__construct($options);
        
        $this->setName('contact');
        $this->setMethod('post');
        $this->setAction('../info/contact');
        
        $name = new Zend_Form_Element_Text('name');
        $name->setAttrib('size', 40);
        $name->setRequired(true);
        $name->addErrorMessage('Please Enter Your Name!');
        $name->removeDecorator('label');
        $name->removeDecorator('htmlTag');
        $name->removeDecorator('Errors');
        
        $email = new Zend_Form_Element_Text('email');
        $email->setAttrib('size', 40);
        $email->setRequired(true);
        $email->addErrorMessage('Please provide a valid Email Address!');
        $email->addValidator('EmailAddress');
        $email->removeDecorator('label');
        $email->removeDecorator('htmlTag');
        $email->removeDecorator('Errors');
        
        $message = new Zend_Form_Element_Textarea('message');
        $message->setRequired(true);
        $message->setAttrib('class', 'formContactMessage');
        $message->addErrorMessage('Please Enter a Message!');
        $message->removeDecorator('label');
        $message->removeDecorator('htmlTag');
        $message->removeDecorator('Errors');
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('SUBMIT MESSAGE');
        $submit->removeDecorator('DtDdWrapper');
        $this->setDecorators(array(array('ViewScript', array('viewScript'=>'_form_contact.phtml'))));
        
        $this->addElements(array($name, $email, $message, $submit));
        
    }


}

