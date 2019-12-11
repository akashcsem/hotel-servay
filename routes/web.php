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
    Route::resource('employees', 'EmployeeController');
    Route::resource('contacts', 'ContactController');
    Route::get('reservation-list', 'ReservationController@index')->name('reservation.list');
    Route::delete('reservation-list{reservation}', 'ReservationController@destroy')->name('reservations.destroy');
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
    Route::get('create-payment/{reservation}', 'ReservationController@createPayment')->name('payment.create');
    Route::post('/create-payment', 'ReservationController@storePayment')->name('payment.store');
    Route::get('reservatio-success/', 'ReservationController@reservationSuccess')->name('reservatio.success');


    Route::get('/contact-us', 'DashboardController@contact')->name('contact.us');
    Route::get('reservation-cancel/{reservation}', 'ReservationController@cancel')->name('cancel-reservation');
});
