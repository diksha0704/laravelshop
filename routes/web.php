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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('about', function () {
    return view('frontend.about');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('detail', function () {
    return view('frontend.detail');
});
Route::get('login', function () {
    return view('frontend.login');
});
Route::get('product', function () {
    return view('frontend.product');
});

