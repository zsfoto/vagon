<?php
return [
	'Theme' => [
		'admin' => [
			'sidebar' => [
				'title' => 'JeffAdmin5',
				
			],
			'sidebarMenu' => [
				'Admin' => [
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Messages'),
						'controller'=> 'Messages',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Email templates'),
						'controller'=> 'Emailtemplates',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Photocategories'),
						'controller'=> 'Photocategories',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Photos'),
						'controller'=> 'Photos',
						'action' 	=> 'index',
					],

/*
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Clients'),
						'controller'=> 'Clients',
						'action' 	=> 'index',
					],
*/

					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Services'),
						'controller'=> 'Services',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Partners'),
						'controller'=> 'Partners',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Texts'),
						'controller'=> 'Texts',
						'action' 	=> 'index',
					],
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('About'),
						'controller'=> 'Abouts',
						'action' 	=> 'edit/1',
					],


					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Slides'),
						'controller'=> 'Slides',
						'action' 	=> 'index',
					],

/*
					[
						'type' 		=> 'menu',
						'icon' 		=> 'fa fa-fw fa-bars',
						'title'		=> __('Users'),
						'controller'=> 'MyUsers',
						'action' 	=> 'index',
					],
*/
					//[
					//	'type' 		=> 'submenu',
					//	'title'		=> __('Tables'),
					//	'icon'		=> 'fa fa-fw fa-table',
					//	'items'		=> [
					//		[
					//			'title' 		=> __('Posts'),
					//			'controller' 	=> 'Posts',
					//			'action' 		=> 'index',								
					//		],
					//		[
					//			'title' 		=> __('Categories'),
					//			'controller' 	=> 'Categories',
					//			'action' 		=> 'index',								
					//		],
					//	]
					//],
				],				
			]		
		]	
	],

];

?>
