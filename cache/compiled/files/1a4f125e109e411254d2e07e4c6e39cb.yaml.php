<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/viraj2252/grav.tradehero.mobi/user/config/site.yaml',
    'modified' => 1490167289,
    'data' => [
        'title' => 'TradeHero',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Viraj Kothalawala',
            'email' => 'viraj@tradehero.mobi'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Trade virtual stocks, compete with your friends, get expert stock tips and earn extra cash all at the same time! TradeHero is a mobile stock market simulation app that lets you learn about trading without any risk.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
