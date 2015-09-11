<?php
namespace Album\Form;
use Zend\Form\Form;
class AlbumForm extends Form 
{
	public function __construct($name=null){
		parent::__construct('album');
		
		$this->add(array(
			'name'=>'id',
			'type'=>'hidden',
		));
		
		$this->add(array(
			'name'=>'artist',
			'type' => 'text',
			'options'=>array(
				'label'=>'Artist'
			),
		));
		
		$this->add(array(
				'name'=>'title',
				'type' => 'text',
				'options'=>array(
						'label'=>'Title'
				),
		));
		
		$this->add(array(
				'name'=>'submit',
				'type' => 'submit',
				'attributes'=>array(
						'value'=>'Go',
						'id'=>'submitButton',
				),
		));
	}	
}