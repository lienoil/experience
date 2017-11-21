<?php

// Route::resource('categories', 'Category\Controllers\CategoryController');

Route::group(['prefix' => 'courses'], function () {
    /**
     * Categories
     *
     */
    Route::delete('categories/delete/many', 'Category\Controllers\CategoryManyController@delete')->name('categories.many.delete');
    Route::delete('categories/delete/{category}', 'Category\Controllers\CategoryController@delete')->name('categories.delete');
    Route::delete('categories/destroy/many', 'Category\Controllers\CategoryManyController@destroy')->name('categories.many.destroy');
    Route::get('categories/refresh', 'Category\Controllers\CategoryRefreshController@index')->name('categories.refresh.index');
    Route::get('categories/trash', 'Category\Controllers\CategoryController@trash')->name('categories.trash');
    Route::post('categories/refresh', 'Category\Controllers\CategoryRefreshController@refresh')->name('categories.refresh.refresh');
    Route::post('categories/restore/many', 'Category\Controllers\CategoryManyController@restore')->name('categories.many.restore');
    Route::post('categories/{category}/restore', 'Category\Controllers\CategoryController@restore')->name('categories.restore');
    Route::resource('categories', 'Category\Controllers\CategoryController');
});
