<?php
class Application_Form_User_Stampare extends Zend_Form
{

	public function init()
	{
            $this->setMethod('post');
		$this->setName('stampare');
		$this->setAction('');
		$this->setAttrib('enctype', 'multipart/form-data');


            $this->addElement('submit', 'stampare', array(
                                'label' => 'Stampare il coupon',
		));
		
		
        }
        
        
}