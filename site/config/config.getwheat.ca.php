<?php

return [
    'cache' => [
        'pages' => [
            'active' => true,
        ]
    ],
    'debug'  => false,
    'auth' => [
        'methods' => ['code','password']
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => '	smtp.sendgrid.net',
            'port' => 465,
            'security' => true,
            'auth' => true,
            'username' => 'apikey',
            'password' => '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'
        ]
    ]
];