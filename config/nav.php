<?php

return [
    'nav-frontend' => [
        'MENU' => [
            'Dashboard' => [
                'route' => 'index',
                'icon' => 'ni ni-tv-2 text-primary'
            ],
            'Product List' => [
                'route' => 'product.index',
                'icon' => 'ni ni-align-left-2 text-pink'
            ],
            'Member Profile' => [
                'route' => 'member.profile',
                'icon' => 'ni ni-circle-08 text-info'
            ],
        ],
        'ADDTIONAL' => [
            'Feedback' => [
                'route' => 'feedback.index',
                'icon' => 'ni ni-spaceship text-primary'
            ],
        ],
    ],
    'nav-backend' => [
        'MENU' => [
            'Dashboard' => [
                'route' => 'admin.dashboard.index',
                'icon' => 'ni ni-tv-2 text-primary'
            ],
            'Information' => [
                'route' => 'admin.information.index',
                'icon' => 'ni ni-notification-70 text-warning'
            ],
            'Product List' => [
                'route' => 'admin.product.index',
                'icon' => 'ni ni-align-left-2 text-pink'
            ],
            'Feedback' => [
                'route' => 'admin.feedback.index',
                'icon' => 'ni ni-spaceship text-primary'
            ],
            'Member List' => [
                'route' => 'admin.member.index',
                'icon' => 'ni ni-circle-08 text-info'
            ],
        ],
        'ADDTIONAL' => [
            'User List' => [
                'route' => 'admin.user.index',
                'icon' => 'ni ni-settings-gear-65'
            ],
        ],
    ],
];
