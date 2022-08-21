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

Route::get('/', [Controller::class, 'home']);
Route::get('/', [UserController::class, 'home']);

Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'login']);//a modificar

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/HomeUser', [UserController::class, 'homeUser']);
Route::post('/HomeUser', [Controller::class, 'homeUser']);

Route::get('/RegisterContent', [Controller::class, 'registerContent']);
Route::post('/RegisterContent', [Controller::class, 'registerContent']);

Route::get('/error', [Controller::class, 'error']);

Route::get('/ConfirmeRegister', [userController::class, 'registerConfirm']);

