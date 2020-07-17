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
    return view('default.layaut');
})->middleware('auth');

// Carte

Route::get('/ajouter', 'CarteController@index')->name('carte_index');
Route::get('/ajouter', 'CarteController@create')->name('carte_create');
Route::post('/ajouter', 'CarteController@store')->name('carte_store');
Route::get('/liste', 'CarteController@show')->name('carte_liste');



// Mail
Route::get('/mail', 'MailController@index')->name('mail_index');
Route::post('/mail/send', 'MailController@sender')->name('mail_sender');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
