<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/viraj2252/grav.tradehero.mobi/system/blueprints/config/system.yaml',
    'modified' => 1489453226,
    'data' => [
        'title' => 'PLUGIN_ADMIN.SYSTEM',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.CONTENT',
                    'underline' => true,
                    'fields' => [
                        'home.alias' => [
                            'type' => 'pages',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                            'show_all' => false,
                            'show_modular' => false,
                            'show_root' => false,
                            'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP'
                        ],
                        'home.hide_in_urls' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                            'help' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.theme' => [
                            'type' => 'themeselect',
                            'classes' => 'fancy',
                            'selectize' => true,
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_THEME_HELP'
                        ],
                        'pages.process' => [
                            'type' => 'checkboxes',
                            'label' => 'PLUGIN_ADMIN.PROCESS',
                            'help' => 'PLUGIN_ADMIN.PROCESS_HELP',
                            'default' => [
                                0 => [
                                    'markdown' => true
                                ],
                                1 => [
                                    'twig' => true
                                ]
                            ],
                            'options' => [
                                'markdown' => 'Markdown',
                                'twig' => 'Twig'
                            ],
                            'use' => 'keys'
                        ],
                        'timezone' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_ADMIN.TIMEZONE',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.TIMEZONE_HELP',
                            'data-options@' => '\\Grav\\Common\\Utils::timezones',
                            'default' => '',
                            'options' => [
                                '' => 'Default (Server Timezone)'
                            ]
                        ],
                        'pages.dateformat.default' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'selectize' => [
                                'create' => true
                            ],
                            'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_HELP',
                            'placeholder' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT_PLACEHOLDER',
                            'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'pages.dateformat.short' => [
                            'type' => 'dateformat',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                            'help' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT_HELP',
                            'default' => 'jS M Y',
                            'options' => [
                                'F jS \\a\\t g:ia' => 'Date1',
                                'l jS \\of F g:i A' => 'Date2',
                                'D, d M Y G:i:s' => 'Date3',
                                'd-m-y G:i' => 'Date4',
                                'jS M Y' => 'Date5'
                            ]
                        ],
                        'pages.dateformat.long' => [
                            'type' => 'dateformat',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                            'help' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT_HELP',
                            'options' => [
                                'F jS \\a\\t g:ia' => 'Date1',
                                'l jS \\of F g:i A' => 'Date2',
                                'D, d M Y G:i:s' => 'Date3',
                                'd-m-y G:i' => 'Date4',
                                'jS M Y' => 'Date5'
                            ]
                        ],
                        'pages.order.by' => [
                            'type' => 'select',
                            'size' => 'long',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_HELP',
                            'options' => [
                                'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                                'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                                'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                                'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                            ]
                        ],
                        'pages.order.dir' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                            'highlight' => 'asc',
                            'default' => 'desc',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION_HELP',
                            'options' => [
                                'asc' => 'PLUGIN_ADMIN.ASCENDING',
                                'desc' => 'PLUGIN_ADMIN.DESCENDING'
                            ]
                        ],
                        'pages.list.count' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'append' => 'PLUGIN_ADMIN.PAGES',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'pages.publish_dates' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                            'help' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.events' => [
                            'type' => 'checkboxes',
                            'label' => 'PLUGIN_ADMIN.EVENTS',
                            'help' => 'PLUGIN_ADMIN.EVENTS_HELP',
                            'default' => [
                                0 => [
                                    'page' => true
                                ],
                                1 => [
                                    'twig' => true
                                ]
                            ],
                            'options' => [
                                'page' => 'Page Events',
                                'twig' => 'Twig Events'
                            ],
                            'use' => 'keys'
                        ],
                        'pages.append_url_extension' => [
                            'type' => 'text',
                            'placeholder' => 'e.g. .html',
                            'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                            'help' => 'PLUGIN_ADMIN.APPEND_URL_EXT_HELP'
                        ],
                        'pages.redirect_default_route' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                            'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.redirect_default_code' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                            'help' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE_HELP',
                            'options' => [
                                301 => '301 - Permanent',
                                302 => '302 - Found',
                                303 => '303 - Other',
                                304 => '304 - Not Modified'
                            ]
                        ],
                        'pages.redirect_trailing_slash' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                            'help' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.ignore_hidden' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                            'help' => 'PLUGIN_ADMIN.IGNORE_HIDDEN_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.ignore_files' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                            'help' => 'PLUGIN_ADMIN.IGNORE_FILES_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'pages.ignore_folders' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                            'help' => 'PLUGIN_ADMIN.IGNORE_FOLDERS_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'pages.url_taxonomy_filters' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                            'help' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.twig_first' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                            'help' => 'PLUGIN_ADMIN.TWIG_FIRST_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.never_cache_twig' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                            'help' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.frontmatter.process_twig' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                            'help' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.frontmatter.ignore_fields' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'placeholder' => 'e.g. forms',
                            'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                            'help' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ]
                    ]
                ],
                'languages' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.LANGUAGES',
                    'underline' => true,
                    'fields' => [
                        'languages.supported' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'placeholder' => 'e.g. en, fr',
                            'label' => 'PLUGIN_ADMIN.SUPPORTED',
                            'help' => 'PLUGIN_ADMIN.SUPPORTED_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'languages.include_default_lang' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                            'help' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'languages.translations' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED',
                            'help' => 'PLUGIN_ADMIN.TRANSLATIONS_ENABLED_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'languages.translations_fallback' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                            'help' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'languages.session_store_active' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                            'help' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'languages.http_accept_language' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                            'help' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'languages.override_locale' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                            'help' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'http_headers' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.HTTP_HEADERS',
                    'underline' => true,
                    'fields' => [
                        'pages.expires' => [
                            'type' => 'text',
                            'size' => 'small',
                            'append' => 'NICETIME.SECOND_PLURAL',
                            'label' => 'PLUGIN_ADMIN.EXPIRES',
                            'help' => 'PLUGIN_ADMIN.EXPIRES_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'pages.last_modified' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                            'help' => 'PLUGIN_ADMIN.LAST_MODIFIED_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.etag' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ETAG',
                            'help' => 'PLUGIN_ADMIN.ETAG_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.vary_accept_encoding' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                            'help' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'markdown' => [
                    'type' => 'section',
                    'title' => 'Markdown',
                    'underline' => true,
                    'fields' => [
                        'pages.markdown.extra' => [
                            'type' => 'toggle',
                            'label' => 'Markdown extra',
                            'help' => 'PLUGIN_ADMIN.MARKDOWN_EXTRA_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.markdown.auto_line_breaks' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                            'help' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.markdown.auto_url_links' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                            'help' => 'PLUGIN_ADMIN.AUTO_URL_LINKS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'pages.markdown.escape_markup' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                            'help' => 'PLUGIN_ADMIN.ESCAPE_MARKUP_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'caching' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.CACHING',
                    'underline' => true,
                    'fields' => [
                        'cache.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CACHING',
                            'help' => 'PLUGIN_ADMIN.CACHING_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cache.check.method' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                            'help' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD_HELP',
                            'options' => [
                                'file' => 'Markdown + Yaml file timestamps',
                                'folder' => 'Folder timestamps',
                                'hash' => 'All files timestamps',
                                'none' => 'No timestamp checking'
                            ]
                        ],
                        'cache.driver' => [
                            'type' => 'select',
                            'size' => 'small',
                            'classes' => 'fancy',
                            'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                            'help' => 'PLUGIN_ADMIN.CACHE_DRIVER_HELP',
                            'options' => [
                                'auto' => 'Auto detect',
                                'file' => 'File',
                                'apc' => 'APC',
                                'apcu' => 'APCu',
                                'xcache' => 'Xcache',
                                'memcache' => 'Memcache',
                                'memcached' => 'Memcached',
                                'wincache' => 'WinCache',
                                'redis' => 'Redis'
                            ]
                        ],
                        'cache.prefix' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                            'help' => 'PLUGIN_ADMIN.CACHE_PREFIX_HELP',
                            'placeholder' => 'PLUGIN_ADMIN.CACHE_PREFIX_PLACEHOLDER'
                        ],
                        'cache.cli_compatibility' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                            'help' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cache.lifetime' => [
                            'type' => 'text',
                            'size' => 'small',
                            'append' => 'NICETIME.SECOND_PLURAL',
                            'label' => 'PLUGIN_ADMIN.LIFETIME',
                            'help' => 'PLUGIN_ADMIN.LIFETIME_HELP',
                            'validate' => [
                                'type' => 'number'
                            ]
                        ],
                        'cache.gzip' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                            'help' => 'PLUGIN_ADMIN.GZIP_COMPRESSION_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cache.allow_webserver_gzip' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                            'help' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'cache.memcache.server' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.MEMCACHE_SERVER',
                            'help' => 'PLUGIN_ADMIN.MEMCACHE_SERVER_HELP',
                            'placeholder' => 'localhost'
                        ],
                        'cache.memcache.port' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.MEMCACHE_PORT',
                            'help' => 'PLUGIN_ADMIN.MEMCACHE_PORT_HELP',
                            'placeholder' => '11211'
                        ],
                        'cache.memcached.server' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                            'help' => 'PLUGIN_ADMIN.MEMCACHED_SERVER_HELP',
                            'placeholder' => 'localhost'
                        ],
                        'cache.memcached.port' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                            'help' => 'PLUGIN_ADMIN.MEMCACHED_PORT_HELP',
                            'placeholder' => '11211'
                        ],
                        'cache.redis.socket' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                            'help' => 'PLUGIN_ADMIN.REDIS_SOCKET_HELP',
                            'placeholder' => '/var/run/redis/redis.sock'
                        ],
                        'cache.redis.server' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                            'help' => 'PLUGIN_ADMIN.REDIS_SERVER_HELP',
                            'placeholder' => 'localhost'
                        ],
                        'cache.redis.port' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                            'help' => 'PLUGIN_ADMIN.REDIS_PORT_HELP',
                            'placeholder' => '6379'
                        ]
                    ]
                ],
                'twig' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.TWIG_TEMPLATING',
                    'underline' => true,
                    'fields' => [
                        'twig.cache' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                            'help' => 'PLUGIN_ADMIN.TWIG_CACHING_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.debug' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                            'help' => 'PLUGIN_ADMIN.TWIG_DEBUG_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.auto_reload' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                            'help' => 'PLUGIN_ADMIN.DETECT_CHANGES_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.autoescape' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                            'help' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twig.umask_fix' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX',
                            'help' => 'PLUGIN_ADMIN.TWIG_UMASK_FIX_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'assets' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ASSETS',
                    'underline' => true,
                    'fields' => [
                        'assets.css_pipeline' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                            'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_pipeline_include_externals' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                            'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_pipeline_before_excludes' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                            'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_minify' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                            'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_minify_windows' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                            'help' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.css_rewrite' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                            'help' => 'PLUGIN_ADMIN.CSS_REWRITE_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_pipeline' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                            'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_pipeline_include_externals' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                            'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_pipeline_before_excludes' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                            'help' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.js_minify' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                            'help' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.enable_asset_timestamp' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                            'help' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'assets.collections' => [
                            'type' => 'array',
                            'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                            'placeholder_key' => 'collection_name',
                            'placeholder_value' => 'collection_path'
                        ]
                    ]
                ],
                'errors' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ERROR_HANDLER',
                    'underline' => true,
                    'fields' => [
                        'errors.display' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                            'help' => 'PLUGIN_ADMIN.DISPLAY_ERRORS_HELP',
                            'size' => 'medium',
                            'highlight' => 1,
                            'options' => [
                                -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                                0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                                1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                            ]
                        ],
                        'errors.log' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                            'help' => 'PLUGIN_ADMIN.LOG_ERRORS_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'debugger' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.DEBUGGER',
                    'underline' => true,
                    'fields' => [
                        'debugger.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.DEBUGGER',
                            'help' => 'PLUGIN_ADMIN.DEBUGGER_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'debugger.shutdown.close_connection' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                            'help' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'media' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.MEDIA',
                    'underline' => true,
                    'fields' => [
                        'images.default_image_quality' => [
                            'type' => 'text',
                            'append' => '%',
                            'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                            'help' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY_HELP',
                            'classes' => 'x-small',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1,
                                'max' => 100
                            ]
                        ],
                        'images.cache_all' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                            'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'images.cache_perms' => [
                            'type' => 'select',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                            'help' => 'PLUGIN_ADMIN.CACHE_PERMS_HELP',
                            'highlight' => '0755',
                            'options' => [
                                '0755' => '0755',
                                '0775' => '0775'
                            ]
                        ],
                        'images.debug' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                            'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'images.auto_fix_orientation' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                            'help' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'media.upload_limit' => [
                            'type' => 'text',
                            'append' => 'bytes',
                            'label' => 'PLUGIN_ADMIN.UPLOAD_LIMIT',
                            'help' => 'PLUGIN_ADMIN.UPLOAD_LIMIT_HELP',
                            'classes' => 'small',
                            'validate' => [
                                'type' => 'number'
                            ]
                        ],
                        'media.enable_media_timestamp' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                            'help' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP_HELP',
                            'highlight' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'media.allowed_fallback_types' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                            'help' => 'PLUGIN_ADMIN.FALLBACK_TYPES_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ],
                        'media.unsupported_inline_types' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                            'help' => 'PLUGIN_ADMIN.INLINE_TYPES_HELP',
                            'classes' => 'fancy',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ]
                    ]
                ],
                'session' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.SESSION',
                    'underline' => true,
                    'fields' => [
                        'session.enabled' => [
                            'type' => 'hidden',
                            'label' => 'PLUGIN_ADMIN.ENABLED',
                            'help' => 'PLUGIN_ADMIN.SESSION_ENABLED_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'default' => true,
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'session.timeout' => [
                            'type' => 'text',
                            'size' => 'small',
                            'append' => 'NICETIME.SECOND_PLURAL',
                            'label' => 'PLUGIN_ADMIN.TIMEOUT',
                            'help' => 'PLUGIN_ADMIN.TIMEOUT_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1
                            ]
                        ],
                        'session.name' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.NAME',
                            'help' => 'PLUGIN_ADMIN.SESSION_NAME_HELP'
                        ],
                        'session.secure' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                            'help' => 'PLUGIN_ADMIN.SESSION_SECURE_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'default' => false,
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'session.httponly' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                            'help' => 'PLUGIN_ADMIN.SESSION_HTTPONLY_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'default' => true,
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'session.path' => [
                            'type' => 'text',
                            'size' => 'small',
                            'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                            'help' => 'PLUGIN_ADMIN.SESSION_PATH_HELP'
                        ],
                        'session.split' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                            'help' => 'PLUGIN_ADMIN.SESSION_SPLIT_HELP',
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'default' => true,
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'advanced' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADVANCED',
                    'underline' => true,
                    'fields' => [
                        'gpm.releases' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                            'highlight' => 'stable',
                            'help' => 'PLUGIN_ADMIN.GPM_RELEASES_HELP',
                            'options' => [
                                'stable' => 'PLUGIN_ADMIN.STABLE',
                                'testing' => 'PLUGIN_ADMIN.TESTING'
                            ]
                        ],
                        'gpm.proxy_url' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'placeholder' => 'e.g. 127.0.0.1:3128',
                            'label' => 'PLUGIN_ADMIN.PROXY_URL',
                            'help' => 'PLUGIN_ADMIN.PROXY_URL_HELP'
                        ],
                        'gpm.method' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                            'highlight' => 'auto',
                            'help' => 'PLUGIN_ADMIN.GPM_METHOD_HELP',
                            'options' => [
                                'auto' => 'PLUGIN_ADMIN.AUTO',
                                'fopen' => 'PLUGIN_ADMIN.FOPEN',
                                'curl' => 'PLUGIN_ADMIN.CURL'
                            ]
                        ],
                        'gpm.verify_peer' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.GPM_VERIFY_PEER',
                            'highlight' => 1,
                            'help' => 'PLUGIN_ADMIN.GPM_VERIFY_PEER_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'reverse_proxy_setup' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                            'highlight' => 0,
                            'help' => 'PLUGIN_ADMIN.REVERSE_PROXY_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'wrapped_site' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                            'highlight' => 0,
                            'help' => 'PLUGIN_ADMIN.WRAPPED_SITE_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'absolute_urls' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                            'highlight' => 0,
                            'help' => 'PLUGIN_ADMIN.ABSOLUTE_URLS_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'param_sep' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                            'classes' => 'fancy',
                            'help' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR_HELP',
                            'default' => '',
                            'options' => [
                                ':' => ': (default)',
                                ';' => '; (for Apache running on Windows)'
                            ]
                        ],
                        'force_ssl' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                            'highlight' => 0,
                            'help' => 'PLUGIN_ADMIN.FORCE_SSL_HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'custom_base_url' => [
                            'type' => 'text',
                            'size' => 'medium',
                            'placeholder' => 'e.g. http://yoursite.com/yourpath',
                            'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                            'help' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL_HELP'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
