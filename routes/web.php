<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo "selamat Datang";
});

Route::get('/about', function () {
    return "2141720242,Iddam anbiya haqi , TI-2H";
});

Route::get('/articles/2', function () {
    return "Ini merupakan halaman artikel dengan id 2";
});