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
        Route::get('/create', 'App\Http\Controllers\Admin\EnseignantsController@create');
        Route::post('/store', 'App\Http\Controllers\Admin\EnseignantsController@store');
        Route::get('/', 'App\Http\Controllers\Admin\EnseignantsController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\EnseignantsController@show');
        Route::get('/{id}/edit', 'App\Http\Controllers\Admin\EnseignantsController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\EnseignantsController@update');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\EnseignantsController@destroy');
    });

    Route::prefix('/apprenants')->group(function () {
        Route::get('create', 'App\Http\Controllers\Admin\ApprenantsController@create');
        Route::post('store', 'App\Http\Controllers\Admin\ApprenantsController@store');
        Route::get('/', 'App\Http\Controllers\Admin\ApprenantsController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\ApprenantsController@show');
        Route::get('/{id}/edit', 'App\Http\Controllers\Admin\ApprenantsController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\ApprenantsController@update');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\ApprenantsController@destroy');
    });
    Route::prefix('/cours')->group(function () {
        Route::get('/create', 'App\Http\Controllers\Admin\CoursController@create');
        Route::get('/', 'App\Http\Controllers\Admin\CoursController@index');
        Route::post('store', 'App\Http\Controllers\Admin\CoursController@store');
        Route::get('/{id}', 'App\Http\Controllers\Admin\CoursController@show');
        Route::get('/edit/{id}', 'App\Http\Controllers\Admin\CoursController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\CoursController@update');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\CoursController@destroy');
    });

    Route::prefix('/matieres')->group(function () {
        Route::get('create', 'App\Http\Controllers\Admin\MatieresController@create');
        Route::post('store', 'App\Http\Controllers\Admin\MatieresController@store');
        Route::get('/', 'App\Http\Controllers\Admin\MatieresController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\MatieresController@show');
        Route::get('/{id}/edit', 'App\Http\Controllers\Admin\MatieresController@edit');
        Route::post('/update/{id}', 'App\Http\Controllers\Admin\MatieresController@update');
        Route::delete('/{id}', 'App\Http\Controllers\Admin\MatieresController@destroy');
    });

Route::prefix('/category')->group(function(){
    Route::get('/create','App\Http\Controllers\CategoryController@create') ;
    Route::post('/ajout','App\Http\Controllers\CategoryController@store') ;
    Route::get('/','App\Http\Controllers\CategoryController@index') ;
    Route::get('/detail/{id}','App\Http\Controllers\CategoryController@show') ;
    Route::get('/edit/{id}','App\Http\Controllers\CategoryController@edit') ;
    Route::post('/update/{id}','App\Http\Controllers\CategoryController@update') ;
    Route::get('/delete/{id}','App\Http\Controllers\CategoryController@destroy') ;

    });

Route::prefix('/category')->group(function(){
    Route::get('/create','App\Http\Controllers\CategoryController@create') ;
    Route::post('/ajout','App\Http\Controllers\CategoryController@store') ;
    Route::get('/','App\Http\Controllers\CategoryController@index') ;
    Route::get('/detail/{id}','App\Http\Controllers\CategoryController@show') ;
    Route::get('/edit/{id}','App\Http\Controllers\CategoryController@edit') ;
    Route::post('/update/{id}','App\Http\Controllers\CategoryController@update') ;
    Route::get('/delete/{id}','App\Http\Controllers\CategoryController@destroy') ;
});

Route::prefix('/diplome')->group(function(){
    Route::get('/create','App\Http\Controllers\DiplomeController@create') ;
    Route::post('/ajout','App\Http\Controllers\DiplomeController@store') ;
    Route::get('/','App\Http\Controllers\DiplomeController@index') ;
    Route::get('/detail/{id}','App\Http\Controllers\DiplomeController@show') ;
    Route::get('/edit/{id}','App\Http\Controllers\DiplomeController@edit') ;
    Route::post('/update/{id}','App\Http\Controllers\DiplomeController@update') ;
    Route::delete('/delete/{id}','App\Http\Controllers\DiplomeController@destroy') ;
});
});







