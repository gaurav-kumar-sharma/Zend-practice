<?php

namespace GForm\Model;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class GForm implements InputFilterAwareInterface{
	public $id;
	public $name;
	public $userName;
	public $address;
	
	public function exchangeArray($data) 
	{
		$this->id     = (!empty($data['id'])) ? $data['id'] : null;
		$this->name     = (!empty($data['name'])) ? $data['name'] : null;
		$this->userName     = (!empty($data['user_name'])) ? $data['user_name'] : null;
		$this->address     = (!empty($data['address'])) ? $data['address'] : null;
	}
	
	public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }
     public function getInputFilter()
     {
     	if (!$this->inputFilter) {
     		$inputFilter = new InputFilter();
     
     		$inputFilter->add(array(
     				'name'     => 'id',
     				'required' => true,
     				'filters'  => array(
     						array('name' => 'Int'),
     				),
     		));
     
     		$inputFilter->add(array(
     				'name'     => 'name',
     				'required' => true,
     				'filters'  => array(
     						array('name' => 'StripTags'),
     						array('name' => 'StringTrim'),
     				),
     				'validators' => array(
     						array(
     								'name'    => 'StringLength',
     								'options' => array(
     										'encoding' => 'UTF-8',
     										'min'      => 1,
     										'max'      => 100,
     								),
     						),
     				),
     		));
     
     		$inputFilter->add(array(
     				'name'     => 'user_name',
     				'required' => true,
     				'filters'  => array(
     						array('name' => 'StripTags'),
     						array('name' => 'StringTrim'),
     				),
     				'validators' => array(
     						array(
     								'name'    => 'StringLength',
     								'options' => array(
     										'encoding' => 'UTF-8',
     										'min'      => 1,
     										'max'      => 100,
     								),
     						),
     				),
     		));
     		
     		$inputFilter->add(array(
     				'name'     => 'address',
     				'required' => true,
     				'filters'  => array(
     						array('name' => 'StripTags'),
     						array('name' => 'StringTrim'),
     				),
     				'validators' => array(
     						array(
     								'name'    => 'StringLength',
     								'options' => array(
     										'encoding' => 'UTF-8',
     										'min'      => 1,
     										'max'      => 100,
     								),
     						),
     				),
     		));
     
     		$this->inputFilter = $inputFilter;
     	}
     
     	return $this->inputFilter;
     }
      
}

?>