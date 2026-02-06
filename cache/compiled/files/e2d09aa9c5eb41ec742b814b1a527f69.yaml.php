<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/boyan/Documents/_DEV/atanasmilkov/user/themes/advocate/blueprints.yaml',
    'modified' => 1770371460,
    'size' => 629,
    'data' => [
        'name' => 'Advocate',
        'slug' => 'advocate',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'Modern advocate/lawyer website theme for Atanas Milkov',
        'icon' => 'balance-scale',
        'author' => [
            'name' => 'Atanas Milkov',
            'url' => 'https://atanasmilkov.com'
        ],
        'homepage' => 'https://atanasmilkov.com',
        'keywords' => 'advocate, lawyer, legal, theme, bulgarian',
        'bugs' => 'https://github.com/getgrav/grav/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
