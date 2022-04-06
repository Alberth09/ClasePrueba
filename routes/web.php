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
    return view('Nintendo');
})->name('Nintendo');

Route::get('/Pokemon', function () {
    return view('Pokemon');
})->name('Pokemon');

Route::get('/AnimalCrossing', function () {
    return view('AnimalCrossing');
})->name('AnimalCrossing');