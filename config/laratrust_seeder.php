<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'forms' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Property' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'Custodian' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'Warehouse' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'ICTC' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'Finance' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'BFMO' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'ERMAC' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'Museo' => [
            'forms' => 'c,r,u',
            'profile' => 'r,u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
