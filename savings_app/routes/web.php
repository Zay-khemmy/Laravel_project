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
Route::get('/', 'SavingsController@index');
Route::get('/dashboard', 'SavingsController@index');

Route::get('plan', 'SavingsController@create');
Route::get('add_money', 'SavingsController@create_fund');
Route::post('/Submit', 'SavingsController@store');
Route::post('/add_money_submit', 'SavingsController@add_money_store');
Route::get('/withdraw', 'SavingsController@withdraw_create');
Route::get('/withdraw_submit', 'SavingsController@withdraw_money_store');
Route::get('/myHome', 'SavingsController@myHome_create');
Route::resource('saving', 'SavingsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
