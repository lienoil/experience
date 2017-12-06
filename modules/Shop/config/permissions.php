<?php
/**
 * -----------------------------------------------------------------------------
 * Permissions Array
 * -----------------------------------------------------------------------------
 *
 * Here we define our permissions that you can attach to roles.
 *
 * These permissions corresponds to a counterpart
 * route (found in <this module>/routes/<route-files>.php).
 * All permissionable routes should have a `name` (e.g. 'roles.store')
 * for the role authentication middleware to work.
 *
 */
return [
    /**
     * -------------------------------------------------------------------------
     * Shop Permissions
     * -------------------------------------------------------------------------
     *
     */
    'view-shop' => [
        'name' =>  'shops.index',
        'code' => 'view-shop',
        'description' => 'Ability to view list of shops',
        'group' => 'shop',
    ],
    'show-shop' => [
        'name' => 'shops.show',
        'code' => 'show-shop',
        'description' => 'Ability to show a single shop',
        'group' => 'shop',
    ],
    'create-shop' => [
        'name' => 'shops.create',
        'code' => 'create-shop',
        'description' => 'Ability to show the form to create shop',
        'group' => 'shop',
    ],
    'store-shop' => [
        'name' => 'shops.store',
        'code' => 'store-shop',
        'description' => 'Ability to save the shop',
        'group' => 'shop',
    ],
    'edit-shop' => [
        'name' => 'shops.edit',
        'code' => 'edit-shop',
        'description' => 'Ability to show the form to edit shop',
        'group' => 'shop',
    ],
    'update-shop' => [
        'name' => 'shops.update',
        'code' => 'update-shop',
        'description' => 'Ability to update the shop',
        'group' => 'shop',
    ],
    'destroy-shop' => [
        'name' =>  'shops.destroy',
        'code' => 'destroy-shop',
        'description' => 'Ability to move the shop to trash',
        'group' => 'shop',
    ],
    'delete-shop' => [
        'name' =>  'shops.delete',
        'code' => 'delete-shop',
        'description' => 'Ability to permanently delete the shop',
        'group' => 'shop',
    ],
    'trash-shop' => [
        'name' =>  'shops.trash',
        'code' => 'trash-shop',
        'description' => 'Ability to view the list of all trashed shop',
        'group' => 'shop',
    ],
    'restore-shop' => [
        'name' => 'shops.restore',
        'code' => 'restore-shop',
        'description' => 'Ability to restore the shop',
        'group' => 'shop',
    ],

    // Many
    'destroy-many-shop' => [
        'name' =>  'shops.many.destroy',
        'code' => 'destroy-many-shop',
        'description' => 'Ability to destroy many shops',
        'group' => 'shop',
    ],
    'delete-many-shop' => [
        'name' =>  'shops.many.delete',
        'code' => 'delete-many-shop',
        'description' => 'Ability to permanently delete many shops',
        'group' => 'shop',
    ],
    'restore-many-shop' => [
        'name' => 'shops.many.restore',
        'code' => 'restore-many-shop',
        'description' => 'Ability to restore many shops',
        'group' => 'shop',
    ],

    //
];
