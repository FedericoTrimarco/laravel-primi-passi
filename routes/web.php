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

// HOME
Route::get('/', function () {
    return view('home', [
        'title' => 'HELLO WORLD',
    ]);
});

//ABOUT
Route::get('/about-lello', function () {
    return view('about', [
        'title' => 'ABOUT',
    ]);
})->name('about');
