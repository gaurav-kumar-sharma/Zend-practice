<?php

namespace GForm\Form;
use Zend\Form\Form;
class GFormForm extends Form {
	public function __construct($name=null) {
		parent::__construct('GForm');
		$this->add(array(
			'name' => 'id',
			'type' => 'hidden',
		));
		$this->add(array(
			'name'=> 'name',
			'type'=> 'text',
			'options' => array(
				'label'=> 'Name',
			),
			'attributes' => array(
				'id'=>'name'
			),
		));
		
		$this->add(array(
				'name'=> 'user_name',
				'type'=> 'text',
				'options' => array(
						'label'=> 'User Name',
				),
				'attributes' => array(
						'id'=>'user_name'
				),
		));
		
		$this->add(array(
				'name'=> 'address',
				'type'=> 'textarea',
				'options' => array(
						'label'=> 'Address',
				),
				'attributes' => array(
						'id'=>'address'
				),
		));
		
		$this->add(array(
				'name'=> 'address',
				'type'=> 'textarea',
				'options' => array(
						'label'=> 'Address',
				),
				'attributes' => array(
						'id'=>'address'
				),
		));
		
		$this->add(array(
				'name'=> 'submit',
				'type'=> 'submit',
				'options' => array(
						'label'=> 'Submit',
				),
				'attributes' => array(
						'id'=>'submit'
				),
		));
	}
}

?>