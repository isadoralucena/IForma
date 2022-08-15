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
    return view('HomePage');
});

Route::get('/login', function () {
    return view('loginScreen');
});
Route::post('/login', function () {
    return view('loginScreen');
});

Route::get('/register', function () {
    return view('registerScreen');
});
Route::post('/register', function () {
    return view('registerScreen');
});

Route::get('/HomeUser', function () {
    return view('UserScreen');
});
Route::post('/HomeUser', function () {
    return view('UserScreen');
});

Route::get('/RegisterContent', function () {
    return view('RegisterContent');
});
Route::post('/RegisterContent', function () {
    return view('RegisterContent');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/ConfirmeRegister', function () {
    return view('ConfirmeRegister');
});
