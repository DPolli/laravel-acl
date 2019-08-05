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

Route::get('/', 'SiteController@index');

Auth::routes();

Route::group(['prefix' => 'painel'], function(){
  
    //Painel Controller
    Route::get('/', 'Painel\PainelController@index');
});
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/post/{id}/update', 'HomeController@update');
//Route::get('/roles_permissions', 'HomeController@rolesPermission');
