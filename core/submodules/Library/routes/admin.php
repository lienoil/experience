<?php
Route::delete('library/delete/many', 'Library\Controllers\LibraryManyController@delete')->name('library.many.delete');
Route::delete('library/delete/{library}', 'Library\Controllers\LibraryController@delete')->name('library.delete');
Route::delete('library/destroy/many', 'Library\Controllers\LibraryManyController@destroy')->name('library.many.destroy');
Route::post('library/restore/many', 'Library\Controllers\LibraryManyController@restore')->name('library.many.restore');

Route::get('library/trash', 'Library\Controllers\LibraryController@trash')->name('library.trash');
Route::post('library/restore/many', 'Library\Controllers\LibraryManyController@restore')->name('library.many.restore');
Route::post('library/{library}/restore', 'Library\Controllers\LibraryController@restore')->name('library.restore');
Route::resource('library', 'Library\Controllers\LibraryController');
