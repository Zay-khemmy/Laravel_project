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

// Route::get('/', function() {
//     return view('welcome');
// });
// Route::get('/sample/{id}/{name}', function($id, $name) {
//     return 'My name is '.$name. ' with id ' .$id;
// });

     // without controller
Route::get('/', function () {
    return 'hello world';
});

    //with controller
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('service', 'PagesController@service');
Route::get('create','PostController@insert');
Route::get('select','PostController@retrieve');
Route::get('update','PostController@update');
Route::get('delete','PostController@delete');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/mypost', 'UserController@index');

Auth::routes();
Route::resource('post', 'PostsController');
Route::post('/comment', 'CommentController@index');


