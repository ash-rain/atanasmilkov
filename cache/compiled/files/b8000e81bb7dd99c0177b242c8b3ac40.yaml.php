<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/boyan/Documents/_DEV/atanasmilkov/user/config/system.yaml',
    'modified' => 1770372139,
    'size' => 632,
    'data' => [
        'absolute_urls' => false,
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'advocate',
            'markdown' => [
                'extra' => true
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'languages' => [
            'supported' => [
                0 => 'bg'
            ],
            'default_lang' => 'bg'
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => true
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_module_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'gpm' => [
            'verify_peer' => true
        ]
    ]
];
