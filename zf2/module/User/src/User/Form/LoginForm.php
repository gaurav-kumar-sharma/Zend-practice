<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace User\Form;
use Zend\Form\Form;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter;
class LoginForm extends Form implements InputFilterAwareInterface
{
    protected $inputFilter;
    public function __construct($name = null, $options = array())
    {
        parent::__construct('LoginForm');


        $this->add(array(
            'name' => 'email',
            'type' => 'text',
            'options' => array(
                'label' => 'Email'
            ),
            'attributes' => array(
                'id' => 'email'
            ),
            )
        );

        $this->add(array(
            'name' => 'password',
            'type' =>  'password',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'id' => 'password',
            ),
            )
        );


    }

    public function setInputFilter(\Zend\InputFilter\InputFilterInterface $inputFilter)
    {
        throw new \Exception('Not Used');
    }

    public function getInputFilter()
    {
        if(!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $inputFilter->add(
                array(
                    'name' => 'email',
                    'required' => 'true',
                    'filters' => array(
                        array('name' => 'stripTags'),
                        array('name' => 'Stringtrim'),
                    ),
                )
            );
            $inputFilter->add(
                array(
                    'name' => 'password',
                    'required' => true,
                    'filter' => [
                        ['name' => 'stripTags'],
                        ['name' => 'stringTrim'],
                    ],
                )
            );
            $this->inputFilter = $inputFilter;
        }
        return $this->inputFilter;
    }
}
