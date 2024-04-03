<?php
return [
	'Auth.Identifiers.Password.fields.username' => 'email',
	'Auth.Authenticators.Form.fields.username' => 'email',	

    'Users' => [
        'table' => 'CakeDC/Users.Users',
        'Tos' => [
            'required' => false,
        ],
        'Registration' => [
            'active' => false,
		],
	],
	
    'Auth' => [
        'AuthenticationComponent' => [
			'load' => true,
            'loginRedirect' => '/admin',
			'requireIdentity' => true,
            'logoutRedirect' => '/',
        ],
		
    ],
	
];
?>