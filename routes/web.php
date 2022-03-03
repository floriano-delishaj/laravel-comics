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

    $comicsData = config('comics');

    $infoMenu = [
        [
            'img' => 'buy-comics-digital-comics.png',
            'text' => 'digital comics'
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'text' => 'dc merchandise'
        ],
        [
            'img' => 'buy-comics-subscriptions.png',
            'text' => 'subscription'
        ],
        [
            'img' => 'buy-comics-shop-locator.png',
            'text' => 'comic shop locator'
        ],
        [
            'img' => 'buy-dc-power-visa.svg',
            'text' => 'dc power visa'
        ],
    ];

    return view('home', compact('comicsData', 'infoMenu'));
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

