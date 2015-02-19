<?php
return array(
		'controllers' => array(
				'invokables' => array(
						'GForm\Controller\GForm' => 'GForm\Controller\GFormController',
				),
		),
		
		'router' => array(
			'routes'=> array(
				'gform' => array(
					'type' => 'segment',
					'options' => array(
						'route' => '/gform[/:action][/:id]',
						'constraints' => array (
							'action' => '[a-zA-Z][a-zA-Z0-9]*',
							'id' => '[0-9]+'	
						),
						'defaults' => array(
							'controller' => 'GForm\Controller\GForm',
							'action' => 'index',
						),
					),
				),
			),
		),
		
		
		
		
		
		
		
		
		
		'view_manager' => array(
				'template_path_stack' => array(
						'gfrom' => __DIR__ . '/../view',
				),
		),
);

