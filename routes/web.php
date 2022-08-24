<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;

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
    return view('homepage');
});

Route::get('/login', function () {
    return view('auth2.login');
});

Route::post('/login', function () {
    return view('auth2.login');
});

Route::get('/register', function () {
    return view('auth2.register');
});

Route::post('/register', function () {
    return view('auth2.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/dashboard', function () {
    return view('dashboard');
});

Route::get('/error', function () {
    return view('error');
});

Route::post('/register', [UserController::class, 'store']);

Route::get('/error', function () {
    return view('error');
});


