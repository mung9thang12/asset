<?php

return [
    'offline'        => env('ASSET_OFFLINE', true),
    'enable_version' => env('ASSET_ENABLE_VERSION', false),
    'version'        => env('ASSET_VERSION', time()),
    'scripts'        => [
        'jquery',
        'bootstrap',
    ],
    'styles'         => [
        'fontawesome',
        'bootstrap',
    ],
    'resources'      => [
        'scripts' => [
            'bootstrap'       => [
                'use_cdn'  => true,
                'location' => 'footer',
                'src'      => [
                    'local' => '/vendor/bootstrap/js/bootstrap.min.js',
                    'cdn'=>'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'
                ],
            ],
            'bootstrap-bundle'       => [
                'use_cdn'  => true,
                'location' => 'footer',
                'src'      => [
                    'local' => '/vendor/bootstrap/js/bootstrap.bundle.min.js',
                    'cdn'=>'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js'
                ],
            ],
            'jquery' => [
                'use_cdn'  => true,
                'location' => 'footer',
                'src'      => [
                    'local' => '/vendor/jquery/jquery-3.5.1.min.js',
                    'cdn'   => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js',
                ],
            ],
        ],
        'styles'  => [
            'bootstrap' => [
                'use_cdn'    => true,
                'location'   => 'header',
                'src'        => [
                    'local' => '/vendor/bootstrap/css/bootstrap.min.css',
                    'cdn'   => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css',
                ],
            ],
            'fontawesome' => [
                'use_cdn'    => true,
                'location'   => 'header',
                'src'        => [
                    'cdn'   => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css',
                ],
            ],
        ],
    ],
];
