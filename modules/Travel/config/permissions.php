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
     * Travel Permissions
     * -------------------------------------------------------------------------
     *
     */
    'view-travel' => [
        'name' =>  'travels.index',
        'code' => 'view-travel',
        'description' => 'Ability to view list of travels',
        'group' => 'travel',
    ],
    'show-travel' => [
        'name' => 'travels.show',
        'code' => 'show-travel',
        'description' => 'Ability to show a single travel',
        'group' => 'travel',
    ],
    'create-travel' => [
        'name' => 'travels.create',
        'code' => 'create-travel',
        'description' => 'Ability to show the form to create travel',
        'group' => 'travel',
    ],
    'store-travel' => [
        'name' => 'travels.store',
        'code' => 'store-travel',
        'description' => 'Ability to save the travel',
        'group' => 'travel',
    ],
    'edit-travel' => [
        'name' => 'travels.edit',
        'code' => 'edit-travel',
        'description' => 'Ability to show the form to edit travel',
        'group' => 'travel',
    ],
    'update-travel' => [
        'name' => 'travels.update',
        'code' => 'update-travel',
        'description' => 'Ability to update the travel',
        'group' => 'travel',
    ],
    'destroy-travel' => [
        'name' =>  'travels.destroy',
        'code' => 'destroy-travel',
        'description' => 'Ability to move the travel to trash',
        'group' => 'travel',
    ],
    'delete-travel' => [
        'name' =>  'travels.delete',
        'code' => 'delete-travel',
        'description' => 'Ability to permanently delete the travel',
        'group' => 'travel',
    ],
    'trash-travel' => [
        'name' =>  'travels.trash',
        'code' => 'trash-travel',
        'description' => 'Ability to view the list of all trashed travel',
        'group' => 'travel',
    ],
    'restore-travel' => [
        'name' => 'travels.restore',
        'code' => 'restore-travel',
        'description' => 'Ability to restore the travel',
        'group' => 'travel',
    ],

    // Many
    'destroy-many-travel' => [
        'name' =>  'travels.many.destroy',
        'code' => 'destroy-many-travel',
        'description' => 'Ability to destroy many travels',
        'group' => 'travel',
    ],
    'delete-many-travel' => [
        'name' =>  'travels.many.delete',
        'code' => 'delete-many-travel',
        'description' => 'Ability to permanently delete many travels',
        'group' => 'travel',
    ],
    'restore-many-travel' => [
        'name' => 'travels.many.restore',
        'code' => 'restore-many-travel',
        'description' => 'Ability to restore many travels',
        'group' => 'travel',
    ],

    //
];
