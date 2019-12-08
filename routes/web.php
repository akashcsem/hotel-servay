<?php
// public routes
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 
 
// routes for admins
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('categories', 'CategoryController');
});
 
 
// routes for authors
Route::group(['prefix'=>'visitor', 'as'=>'visitor.', 'namespace'=>'Visitor', 'middleware'=>['auth', 'visitor']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
