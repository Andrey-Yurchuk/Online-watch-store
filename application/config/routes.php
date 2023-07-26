<?php

return [
    //maincontroller
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],

    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],

    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],

    'watch/{id:\d+}' => [  
        'controller' => 'main',
        'action' => 'watch', 
    ],

    'search' => [
        'controller' => 'main',
        'action' => 'search',
    ],

    //admincontroller
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login', 
    ],
    
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout', 
    ],
    
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add', 
    ],
    
    'admin/edit/{id:\d+}' => [   
        'controller' => 'admin',
        'action' => 'edit', 
    ],
    
    'admin/delete/{id:\d+}' => [               
        'controller' => 'admin',
        'action' => 'delete', 
    ],
    
    'admin/watch/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'watch', 
    ],
    
    'admin/watch' => [
        'controller' => 'admin',
        'action' => 'watch', 
    ],

];

