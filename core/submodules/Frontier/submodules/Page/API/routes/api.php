<?php

Route::delete('pages/destroy/{page}', 'Page\API\Controllers\PageController@destroy')->name('pages.destroy');
Route::delete('pages/delete/{page}', 'Page\API\Controllers\PageController@delete')->name('pages.delete');
Route::get('pages/all', 'Page\API\Controllers\PageController@all')->name('pages.all');
Route::get('pages/search', 'Page\API\Controllers\PageController@search')->name('pages.search');
Route::get('pages/trash/all', 'Page\API\Controllers\PageController@getTrash')->name('pages.trash.all');
Route::post('pages/{page}/clone', 'Page\API\Controllers\PageController@clone')->name('pages.clone');
Route::post('pages/{page}/restore', 'Page\API\Controllers\PageController@restore')->name('pages.restore');
