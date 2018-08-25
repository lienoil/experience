<?php

// Route::get('roadtrips/categories', '\Roadtrip\Controllers\CategoryController@index')->name('roadtrips.categories.index');
Route::get('roadtrips/categories', 'Roadtrip\Controllers\CategoryController@index')->name('roadtrips.categories.index');

Route::resource('roadtrips/amenities', 'Roadtrip\Controllers\AmenityController');

Route::post('roadtrips/categories', 'Roadtrip\Controllers\CategoryController@store')->name('roadtrips.categories.store');
Route::delete('roadtrips/categories', 'Roadtrip\Controllers\CategoryController@destroy')->name('roadtrips.categories.destroy');


// SoftDeletes
Route::delete('roadtrips/{roadtrip}/delete', '\Roadtrip\Controllers\RoadtripController@delete')->name('roadtrips.delete');
Route::get('roadtrips/trashed', '\Roadtrip\Controllers\RoadtripController@trashed')->name('roadtrips.trashed');

Route::patch('roadtrips/{roadtrip}/restore', '\Roadtrip\Controllers\RoadtripController@restore')->name('roadtrips.restore');

Route::resource('roadtrips', '\Roadtrip\Controllers\RoadtripController')->except(['show']);
