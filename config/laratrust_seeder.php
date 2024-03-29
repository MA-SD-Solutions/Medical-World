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
        'Admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'website' => 'c,r,u,d',
            'product' => 'c,r,u,d',
            'Image' => 'c,r,u,d',
            'service' => 'c,r,u,d',
            'cart' => 'c,r,u,d',
            'aboutUs' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'permissions' => 'r,d'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
