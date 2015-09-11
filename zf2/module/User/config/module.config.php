<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'User\Controller\User' => 'User\Controller\UserController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'login' => array(
                'type' => 'literal',
                'options' => array(
                  'route' => '/login',
                   'defaults' => array(
                       'controller' => 'User\Controller\User',
                       'action' => 'login',
                   ),
                ),
            ),
        ),
    ),
);
