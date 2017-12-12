<?php

return [
    /**
     * -------------------------------------------------------------------------
     * Travels Menus
     * -------------------------------------------------------------------------
     * Specify here the menus to appear on the sidebar.
     *
     */
    'travel' => [
        'name' => 'travel',
        'order' => 51,
        'slug' => url(config('path.admin').'/travels'),
        'always_viewable' => false,
        'icon' => 'place',
        'labels' => [
            'title' => __('Travels'),
            'description' => __('Manage travels'),
        ],
        'children' => [
            'view-travel' => [
                'name' => 'view-travel',
                'order' => 1,
                'slug' => url(config('path.admin').'/travels'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('All Travels'),
                    'description' => __('View the list of all travels'),
                ],
            ],
            'create-travel' => [
                'name' => 'create-travel',
                'order' => 2,
                'slug' => url(config('path.admin').'/travels/create'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('Create Travel'),
                    'description' => __('Create a Travel'),
                ],
            ],
            'trashed-travel' => [
                'name' => 'trashed-travel',
                'order' => 3,
                'slug' => url(config('path.admin').'/travels/trashed'),
                'always_viewable' => false,
                'labels' => [
                    'title' => __('Trashed Travels'),
                    'description' => __('View list of all travels moved to trash'),
                ],
            ],
        ],
    ],
];
