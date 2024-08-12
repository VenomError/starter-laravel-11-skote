<?php

return [
    'user' => [
        [
            'route' => 'dashboard',
            'title' => 'dashboard',
            'icon' => 'bx bxs-dashboard',
            'navigate' => false,
            'sub' => [
                [
                    'route' => 'dashboard',
                    'title' => 'default',
                ],
                [
                    'route' => 'dashboard',
                    'title' => 'blogs',
                ],
                [
                    'route' => 'dashboard',
                    'title' => 'jobs',
                ],
            ],
        ],
        [
            'route' => 'dashboard',
            'title' => 'chat',
            'icon' => 'bx bx-chat',
            'navigate' => false,
            'sub' => [],
        ],
    ],
    'admin' => [
        [
            'route' => 'dashboard',
            'title' => 'dashboard admin',
            'icon' => 'bx bxs-dashboard',
            'navigate' => false,
            'sub' => [
                [
                    'route' => 'dashboard',
                    'title' => 'default',
                ],
                [
                    'route' => 'dashboard',
                    'title' => 'blogs',
                ],
                [
                    'route' => 'dashboard',
                    'title' => 'jobs',
                ],
            ],
        ],
        [
            'route' => 'dashboard',
            'title' => 'chat admin',
            'icon' => 'bx bx-chat',
            'navigate' => false,
            'sub' => [],
        ],
    ],
];
