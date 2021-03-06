<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Blog\Service\PostServiceInterface;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController {
	
	protected $postService;
	public function __construct(PostServiceInterface $postService) {
		$this->postService = $postService;
	}
	public function indexAction(){
		return new ViewModel(array(
             'posts' => $this->postService->findAllPosts()
         ));
	}	
}
