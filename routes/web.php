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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cds', 'CdController@index')->name('cd.index');
Route::get('/dvds', 'DvdController@index')->name('dvd.index');
Route::get('/books', 'BookController@index')->name('book.index');
Route::post('/loans', 'LoanController@store')->middleware('auth')->name('loan.store');
Route::get('/loans', 'LoanController@userLoans')->middleware('auth')->name('user.loans');
