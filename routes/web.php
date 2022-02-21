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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM 2041720145 nama Mahbub Auliaur Rahman';
});

Route::get('/articles/{id}', function ($id) {
    return 'Ini adalah artikel ke-' .$id;
});
