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
        'language' => 'en',
        'css' => 'assets/css/panel.css',
        'js' => 'assets/js/panel.js',
        'favicon' => 'assets/panel.ico',
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
            'pattern' => 'sitemap.xml',
            'language' => '*',
            'action' => function () {
                $kirby = kirby();
                $content = snippet('sitemap', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'application/xml');
            }            
        ],
        [
            'pattern' => 'sitemap',
            'language' => '*',
            'action'  => function() {
                return go('sitemap.xml', 301);
            }
        ],
        [
            'pattern' => 'search',
            'language' => '*',
            'action'  => function() {
                $site = site();
                $content = snippet('site-search-results', compact('site'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'logout',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('logout', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ],
        [
            'pattern' => 'like',
            'language' => '*',
            'action'  => function() {
                $kirby = kirby();
                $content = snippet('like', compact('kirby'), true);
                return new Kirby\Cms\Response($content, 'text/html');
            }
        ]
    ]
];