<?php
// public routes
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('root');
 
 
// routes for admins
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('categories', 'CategoryController');
    Route::resource('designations', 'DesignationController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('rooms', 'RoomController');
    Route::resource('payments', 'PaymentController');
    Route::resource('reservations', 'ReservationController');
    Route::resource('contacts', 'ContactController');
});
 
 
// routes for authors
// Route::group(['prefix'=>'visitor', 'as'=>'visitor.', 'namespace'=>'Visitor', 'middleware'=>['auth', 'visitor']], function() {
//     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// });
Route::group(['prefix'=>'visitor', 'as'=>'visitor.', 'namespace'=>'Visitor'], function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('rooms', 'RoomController');
    Route::post('create-reservation', 'ReservationController@createReservation')->name('room.reservation');
    Route::get('reservation-success', 'ReservationController@createSuccess')->name('reservation.success');
});
