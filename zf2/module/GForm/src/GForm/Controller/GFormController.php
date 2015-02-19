<?php

namespace GForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GFormController extends AbstractActionController {
	protected $gFormTable;
	public function indexAction() {
		return new ViewModel(array(
			'gform'=>$this->getGFormTable()->fetchAll(),
		));
	}
	public function getGFormTable() {
		if(!$this->gFormTable) {
			$sm = $this->getServiceLocator();
			$this->gFormTable = $sm->get('GForm\Model\GFormTable');
		}
		return $this->gFormTable;
	}
}


?>