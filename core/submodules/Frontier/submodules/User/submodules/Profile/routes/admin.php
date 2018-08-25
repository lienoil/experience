<?php

Route::get('profile', function () {
    return redirect()->route('profile.show', user()->handlename);
})->name('profile.index');

Route::get('profile/{handle?}', 'Profile\Controllers\ProfileController@show')->name('profile.show');
Route::get('profile/{handle}/edit', 'Profile\Controllers\ProfileController@edit')->name('profile.edit');
Route::put('profile/{handle}', 'Profile\Controllers\ProfileController@update')->name('profile.update');
// Route::resource('profile', 'Profile\Controllers\ProfileController');
