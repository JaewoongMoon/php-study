<?php
namespace Album;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;



return [
	// controllers section provides a list of all the controllers provided by the module
	// Because we defined our own factory, we can remove the controller definition below. 
	/*
    'controllers' => [
        'factories' => [
            Controller\AlbumController::class => InvokableFactory::class,
        ],
		],*/
	'router' => [
		'routes' => [
			// The name of the route is 'album' and has a type of 'segment'.
			// The Segment route allows us to specify placeholders in the URL pattern (route)
			// that will be mapped to named parameters in the matched route.
			
			'album' => [
				'type' => Segment::class,
				'options' => [
					// any URL that starts with /album, after that is optional 
					'route' => '/album[/:action[/:id]]',  
					// allows us to ensure that the characters within a segment are as expected,
					// so we have limited actions to starting with a letter
					// and then subsequent characters only being alphanumeric, underscore,
					// or hyphen. 
					'constraints' => [
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id' => '[0-9]+',
						],
					'defaults' =>[
						'controller' => Controller\AlbumController::class,
						'action' => 'index',
						],
					],
				],
			],
		],
	
	// add our view directory to the TemplatePathStack configuration
    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
	
	
];

?>