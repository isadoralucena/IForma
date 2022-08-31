<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('home');
});
Route::middleware(['auth'])->group(function (){
    //only authenticated people access the contents
    //only admin can register users
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('/contents/teachercontrolpane', [ContentController::class, 'teachercontrolpane']);
    Route::get('/contents/admincontrolpane', [ContentController::class, 'admincontrolpane']);
    Route::resource('/contents', ContentController::class);
    
});

require __DIR__.'/auth.php';
