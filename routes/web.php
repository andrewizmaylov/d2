<?php

я пытался прикрутить Master модель к календарю, через 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/user', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/phone', 'PhoneController@store');
Route::post('/addOcupation', 'HomeController@addOcupation');

Route::get('/cal', function(){
	return view('calendar');
});

Route::get('/cal2', function(){
	return view('calendar2');
});

Route::get('/admin', 'OcupationController@create');
Route::post('/ocupation', 'OcupationController@store');
Route::get('ocupation/{ocupation}', 'OcupationController@show');

// add new user from Ocupation staff page
Route::post('addPerson', 'OcupationController@addPerson');
Route::post('addPhone', 'PhoneController@addPhone');
Route::post('addBirthday', 'BirthdayController@store');