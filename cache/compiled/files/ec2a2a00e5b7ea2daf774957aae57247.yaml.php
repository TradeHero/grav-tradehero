<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/viraj2252/grav.tradehero.mobi/user/plugins/admin/blueprints.yaml',
    'modified' => 1489647997,
    'data' => [
        'name' => 'Admin Panel',
        'version' => '1.2.14',
        'description' => 'Adds an advanced administration panel to manage your site',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-admin',
        'keywords' => 'admin, plugin, manager, panel',
        'bugs' => 'https://github.com/getgrav/grav-plugin-admin/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-admin/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.1.9'
            ],
            1 => [
                'name' => 'form',
                'version' => '~2.0'
            ],
            2 => [
                'name' => 'email',
                'version' => '~2.0'
            ],
            3 => [
                'name' => 'login',
                'version' => '~2.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'Basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cache_enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                    'help' => 'PLUGIN_ADMIN.ADMIN_CACHING_HELP',
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Administrator path',
                    'size' => 'medium',
                    'placeholder' => 'Default route for administrator (relative to base)',
                    'help' => 'If you want to change the URL for the administrator, you can provide a path here'
                ],
                'logo_text' => [
                    'type' => 'text',
                    'label' => 'Logo text',
                    'size' => 'medium',
                    'placeholder' => 'Grav',
                    'help' => 'Text to display in place of the default Grav logo'
                ],
                'body_classes' => [
                    'type' => 'text',
                    'label' => 'Body classes',
                    'size' => 'medium',
                    'help' => 'Add a space separated name of custom body classes'
                ],
                'sidebar.activate' => [
                    'type' => 'select',
                    'label' => 'Sidebar Activation',
                    'help' => 'Control how the sidebar is activated',
                    'size' => 'small',
                    'default' => 'tab',
                    'options' => [
                        'tab' => 'Tab',
                        'hover' => 'Hover'
                    ]
                ],
                'sidebar.hover_delay' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'append' => 'millseconds',
                    'label' => 'Hover delay',
                    'default' => 500,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'sidebar.size' => [
                    'type' => 'select',
                    'label' => 'Sidebar Size',
                    'help' => 'Control the width of the sidebar',
                    'size' => 'medium',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Automatic width',
                        'small' => 'Small width'
                    ]
                ],
                'theme' => [
                    'type' => 'hidden',
                    'label' => 'Theme',
                    'default' => 'grav'
                ],
                'edit_mode' => [
                    'type' => 'select',
                    'label' => 'Edit mode',
                    'size' => 'small',
                    'default' => 'normal',
                    'options' => [
                        'normal' => 'Normal',
                        'expert' => 'Expert'
                    ],
                    'help' => 'Auto will use blueprint if available, if none found, it will use "Expert" mode.'
                ],
                'google_fonts' => [
                    'type' => 'toggle',
                    'label' => 'Use Google Fonts',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Use Google custom fonts.  Disable this to use Helvetica. Useful when using Cyrillic and other languages with unsupported characters.'
                ],
                'show_beta_msg' => [
                    'type' => 'hidden'
                ],
                'show_github_msg' => [
                    'type' => 'toggle',
                    'label' => 'Show GitHub Link',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Show the "Found an issue? Please report it on GitHub." message.'
                ],
                'enable_auto_updates_check' => [
                    'type' => 'toggle',
                    'label' => 'Automatically check for updates',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Shows an informative message, in the admin panel, when an update is available.'
                ],
                'session.timeout' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Session Timeout',
                    'append' => 'secs',
                    'help' => 'Sets the session timeout in seconds',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'warnings.delete_page' => [
                    'type' => 'toggle',
                    'label' => 'Warn on page delete',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Ask the user confirmation when deleting a page'
                ],
                'Dashboard' => [
                    'type' => 'section',
                    'title' => 'Dashboard',
                    'underline' => true
                ],
                'widgets.dashboard-maintenance' => [
                    'type' => 'toggle',
                    'label' => 'Maintenance Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard maintenance widget'
                ],
                'widgets.dashboard-statistics' => [
                    'type' => 'toggle',
                    'label' => 'Statistics Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard statistics widget'
                ],
                'widgets.dashboard-notifications' => [
                    'type' => 'toggle',
                    'label' => 'Notifications Feed Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard notifications feed widget'
                ],
                'widgets.dashboard-feed' => [
                    'type' => 'toggle',
                    'label' => 'News Feed Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard news feed widget'
                ],
                'widgets.dashboard-pages' => [
                    'type' => 'toggle',
                    'label' => 'Latest Pages Widget',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard latest pages widget'
                ],
                'Notifications' => [
                    'type' => 'section',
                    'title' => 'Notifications',
                    'underline' => true
                ],
                'notifications.dashboard' => [
                    'type' => 'toggle',
                    'label' => 'Dashboard Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display dashboard-based notifications'
                ],
                'notifications.plugins' => [
                    'type' => 'toggle',
                    'label' => 'Plugins Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display plugins-targeted notifications'
                ],
                'notifications.themes' => [
                    'type' => 'toggle',
                    'label' => 'Themes Notifications',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Display themes-targeted notifications'
                ],
                'Popularity' => [
                    'type' => 'section',
                    'title' => 'Popularity',
                    'underline' => true
                ],
                'popularity.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Visitor tracking',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable the visitors stats collecting feature'
                ],
                'dashboard.days_of_stats' => [
                    'type' => 'text',
                    'label' => 'Days of stats',
                    'append' => 'days',
                    'size' => 'x-small',
                    'default' => 7,
                    'help' => 'Keep stats for the specified number of days, then drop them',
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'popularity.ignore' => [
                    'type' => 'array',
                    'label' => 'Ignore',
                    'size' => 'large',
                    'help' => 'URLs to ignore',
                    'default' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ],
                'popularity.history.daily' => [
                    'type' => 'hidden',
                    'label' => 'Daily history',
                    'default' => 30
                ],
                'popularity.history.monthly' => [
                    'type' => 'hidden',
                    'label' => 'Monthly history',
                    'default' => 12
                ],
                'popularity.history.visitors' => [
                    'type' => 'hidden',
                    'label' => 'Visitors history',
                    'default' => 20
                ]
            ]
        ]
    ]
];
