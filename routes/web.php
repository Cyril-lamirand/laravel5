<?php

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

Route::get('article/{n}', function($n) { 
    return view('article')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/clients', function () {
    
    $clients = [
    	'Jean Dupont',
    	'Marc Dorcel',
    	'John Travolta'
    ];

    $special_token = "0123456789";

    return view('clients', [
    	'clients' => $clients,
    	'special_token' => $special_token
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');