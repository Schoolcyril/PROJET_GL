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

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('/admin')->group(function () {

    Route::prefix('/enseignants')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\EnseignantsController@index')->name('liste-enseignants');
        Route::get('/{id}', 'App\Http\Controllers\Admin\EnseignantsController@show');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\EnseignantsController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\EnseignantsController@update');
        Route::get('/create', 'App\Http\Controllers\Admin\EnseignantsController@create');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\EnseignantsController@delete');
    });


    Route::prefix('/apprenants')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\ApprenantsController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\ApprenantsController@show');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ApprenantsController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\ApprenantsController@update');
        Route::get('create/', 'App\Http\Controllers\Admin\ApprenantsController@create');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\ApprenantsController@delete');
    });
    Route::prefix('/cours')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\CoursController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\CoursController@show');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\CoursController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\CoursController@update');
        Route::get('/create', 'App\Http\Controllers\Admin\CoursController@create');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\CoursController@delete');
    });

    Route::prefix('/matieres')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\MatieresController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\MatieresController@show');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\MatieresController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\MatieresController@update');
        Route::get('/create', 'App\Http\Controllers\Admin\MatieresController@create');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\MatieresController@delete');
    });
});

