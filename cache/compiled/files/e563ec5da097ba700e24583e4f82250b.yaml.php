<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/viraj2252/grav.tradehero.mobi/user/plugins/admin/blueprints/admin/pages/modular_new.yaml',
    'modified' => 1489647997,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_MODULAR_CONTENT'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PAGE_TITLE',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'validate' => [
                        'rule' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PAGE',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::rawRoute',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_ADMIN.MODULAR_TEMPLATE',
                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                    'default' => 'default',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::modularTypes',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'modular' => [
                    'type' => 'hidden',
                    'default' => 1,
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
