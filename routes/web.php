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
    return view('welcome');
});

//ruta para almacenar los pdfs
Route::get('index', 'ZipController@index')->name('index');

//ruta para descargar el zip
Route::get('zip', 'ZipController@desascargar_zip')->name('zip');

//ruta para guardar el zip
Route::post('guardar', 'ZipController@guardar_archivo')->name('guardar');
