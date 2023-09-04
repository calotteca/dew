<?php

return [
    'home' => 'home',
    'languages' => true,
    'date'  => [
        'handler' => 'intl',
    ],
    'locale' => 'fr_CA',
    'cache' => [
        'pages' => [
            'active' => false,
        ]
    ],
    'debug'  => true,
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'localhost',
            'port' => 1025,
            'security' => false
        ]
    ],
    'auth' => [
        'methods' => ['password','code']
    ],
    'panel' => [
        'slug' => 'panel',
        'language' => 'en'
    ],
    'thumbs' => [
        'srcsets' => [
            'default' => [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800],
                '1920w' => ['width' => 1920]
            ],
            'webp' => [
                '300w'  => ['width' => 300, 'format' => 'webp'],
                '600w'  => ['width' => 600, 'format' => 'webp'],
                '900w'  => ['width' => 900, 'format' => 'webp'],
                '1200w' => ['width' => 1200, 'format' => 'webp'],
                '1800w' => ['width' => 1800, 'format' => 'webp'],
                '1920w' => ['width' => 1920, 'format' => 'webp']
            ],
        ]
    ],
    'routes' => [
        [
            'pattern' => 'start',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/start', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'end',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/end', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'ended',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/ended', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'started',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/started', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'lol',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/lol', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'logout',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('api/logout', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ]
    ]
];