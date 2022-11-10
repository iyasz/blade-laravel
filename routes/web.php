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
    return view(
        'home',
        ['id' => 'anime'],
        ['names' => ['iyasz', 'elaina', 'arisu']]
    );
});

Route::redirect('/animes', '/anime');


// Route::view('/anime', 'anime', ['id' => 'anime']);

Route::get('/anime',  function () {
    return view(
        'anime',
        ['id' => 'anime'],
        ['nama' => ['iyasz', 'anime']]
    );
});

Route::get('/kontak', function () {
    return view('kontak', ['nama' => 'elaine']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'elaine']);
});
