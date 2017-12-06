<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Shops Menus
     * -------------------------------------------------------------------------
     * Specify here the menus to appear on the sidebar.
     *
     */
    'shop' => [
        'name' => 'shop',
        'order' => 51,
        'slug' => url(config('path.admin').'/shops'),
        'always_viewable' => false,
        'icon' => '',
        'labels' => [
            'title' => __('Shops'),
            'description' => __('Manage shops'),
        ],
        'children' => [
            'view-shop' => [
                'name' => 'view-shop',
                'order' => 1,
                'slug' => url(config('path.admin').'/shops'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('All Shops'),
                    'description' => __('View the list of all shops'),
                ],
            ],
            'create-shop' => [
                'name' => 'create-shop',
                'order' => 2,
                'slug' => url(config('path.admin').'/shops/create'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('Create Shop'),
                    'description' => __('Create a Shop'),
                ],
            ],
            'trashed-shop' => [
                'name' => 'trashed-shop',
                'order' => 3,
                'slug' => url(config('path.admin').'/shops/trashed'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('Trashed Shops'),
                    'description' => __('View list of all shops moved to trash'),
                ],
            ],
        ],
    ],
];
