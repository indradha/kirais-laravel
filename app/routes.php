<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Set Dashboard Routing
Route::get('/', function(){
	return View::make('core::index');
})->before('auth');
Route::get('/admin', function(){
	return View::make('core::index');
})->before('auth');


// Set Users Routing
Route::resource('users', 'UsersController');
Route::resource('users.transactions', 'TransactionsController');