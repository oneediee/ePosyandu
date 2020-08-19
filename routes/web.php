<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => ['auth', 'checkRole:superadmin']], function(){    
    Route::get('/admins', 'AdminsController@index');
    Route::post('/admins/create', 'AdminsController@create');
    Route::get('/admins/{id}/edit', 'AdminsController@edit');
    Route::post('/admins/{id}/update', 'AdminsController@update');
    Route::get('/admins/{id}/delete', 'AdminsController@delete');

    Route::get('/mothers', 'MothersController@index');
    Route::post('/mothers/create', 'MothersController@create');
    Route::get('/mothers/{id}/edit', 'MothersController@edit');
    Route::post('/mothers/{id}/update', 'MothersController@update');
    Route::get('/mothers/{id}/delete', 'MothersController@delete');

    Route::get('/users', 'UsersController@index');
    Route::post('/users/create', 'UsersController@create');
    Route::get('/users/{id}/edit', 'UsersController@edit');
    Route::post('/users/{id}/update', 'UsersController@update');
    Route::get('/users/{id}/delete', 'UsersController@delete');
});

Route::group(['middleware' => ['auth', 'checkRole:superadmin,admin']], function(){    
    Route::get('/babies', 'BabiesController@index');
    Route::post('/babies/create', 'BabiesController@create');
    Route::get('/babies/{id}/edit', 'BabiesController@edit');
    Route::post('/babies/{id}/update', 'BabiesController@update');
    Route::get('/babies/{id}/delete', 'BabiesController@delete');
     
    Route::get('/immunizations', 'ImmunizationsController@index');
    Route::post('/immunizations/create', 'ImmunizationsController@create');
    Route::get('/immunizations/{id}/edit', 'ImmunizationsController@edit');
    Route::post('/immunizations/{id}/update', 'ImmunizationsController@update');
    Route::get('/immunizations/{id}/delete', 'ImmunizationsController@delete');
    
    Route::get('/schedules', 'SchedulesController@index');
    Route::post('/schedules/create', 'SchedulesController@create');
    Route::get('/schedules/{id}/edit', 'SchedulesController@edit');
    Route::post('/schedules/{id}/update', 'SchedulesController@update');
    Route::get('/schedules/{id}/delete', 'SchedulesController@delete');
});