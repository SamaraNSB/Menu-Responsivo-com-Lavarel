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
    return view('home');
});

Route::get('/feminino', function () {
    return view('feminino');
});

Route::get('/masculino', function () {
    return view('masculino');
});

Route::get('/infantil', function () {
    return view('infantil');
});

Route::get('/plus', function () {
    return view('plus');
});