<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/viraj2252/grav.tradehero.mobi/user/themes/vjtest/blueprints.yaml',
    'modified' => 1490153983,
    'data' => [
        'name' => 'Vjtest',
        'version' => '0.1.0',
        'description' => 'vjtest',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Viraj',
            'email' => 'viraj@tradehero.mobi'
        ],
        'homepage' => 'https://github.com/viraj/grav-theme-vjtest',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/viraj/grav-theme-vjtest/issues',
        'readme' => 'https://github.com/viraj/grav-theme-vjtest/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
