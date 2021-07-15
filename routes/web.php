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

Route::prefix('admin')->group(function() {
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
   });


// Route::prefix('store')->group(function(){
//     Route::get('/list', 'StoreController@list')->name('store.list');
// });
Route::get('list', 'StoreController@list')->name('list');
Route::get('create', 'StoreController@create')->name('create');
Route::post('add', 'StoreController@add')->name('add');
Route::get('show', 'StoreController@show')->name('show');
Route::get('edit/{id}', 'StoreController@edit')->name('edit');
Route::post('update/{id}', 'StoreController@update')->name('update');
Route::get('delete/{id}', 'StoreController@delete')->name('delete');


