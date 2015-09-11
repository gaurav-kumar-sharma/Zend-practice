<?php
namespace Blog\Factory;

use Blog\Controller\BlogController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BlogControllerFactory implements FactoryInterface {
	
	public function createService(ServiceLocatorInterface $serviceLocator) {
		$realServiceLoactor = $serviceLocator->getServiceLocator();
		$postService = $realServiceLoactor->get('Blog\Service\PostServiceInterface');
		return new BlogController($postService);
	}
} 