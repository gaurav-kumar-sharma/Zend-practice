<?php
 return array(
 	
 		'controllers'=> array(
 			'factories'=> array(
 				'Blog\Controller\Blog' => 'Blog\Factory\BlogControllerFactory',
 			),
 		),
 		'service_manager' => array(
 				'invokables' => array(
 						'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService'
 				)
 		),
 		'router'=> array(
 			'routes'=> array(
 				'blog'=> array(
 					'type'=>'segment',
 						'options'=> array(
 							'route'=>'/blog[/:action][/:id]',
 							 'constraints'=> array(
 							 	'action'=>'[a-zA-Z][a-zA-Z0-9-_]*',
 							 	'id' =>'[0-9]+',
 							 ),
 							'defaults'=>array(
 								'controller'=>'Blog\Controller\Blog',
 								'action'=>'index',
 							),
 						),
 				),
 			),
 		),
 		
 		'view_manager' => array(
        'template_path_stack' => array(
            'Blog' => __DIR__ . '/../view'
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        ),
    )
 );
 ?>