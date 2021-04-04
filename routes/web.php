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
    return view('index');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/fashion', function () {
    return view('Fashion');
});
Route::get('/protfolio', function () {
    return view('Protfolio');
});
Route::get('/news', function () {
    return view('News');
});
Route::get('/apparel', function () {
    return view('Apparel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
