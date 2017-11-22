<?php

Route::delete('pages/delete/many', 'Page\Controllers\PageManyController@delete')->name('pages.many.delete');
Route::delete('pages/delete/{page}', 'Page\Controllers\PageController@delete')->name('pages.delete');
Route::delete('pages/destroy/many', 'Page\Controllers\PageManyController@destroy')->name('pages.many.destroy');
Route::get('pages/refresh', 'Page\Controllers\PageRefreshController@index')->name('pages.refresh.index');
Route::get('pages/trash', 'Page\Controllers\PageController@trash')->name('pages.trash');
Route::post('pages/refresh', 'Page\Controllers\PageRefreshController@refresh')->name('pages.refresh.refresh');
Route::post('pages/restore/many', 'Page\Controllers\PageManyController@restore')->name('pages.many.restore');
Route::post('pages/{page}/restore', 'Page\Controllers\PageController@restore')->name('pages.restore');
Route::resource('pages', 'Page\Controllers\PageController');
