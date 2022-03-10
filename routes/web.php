<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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


Route::view('/', 'index')->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::get('logout', LogoutController::class);
Route::get('user-page', UserController::class)->middleware('auth');
Route::post('upload', UploadController::class)->middleware('auth');
Route::get('admin', UploadController::class)->middleware('auth');
Route::get('exhibitions', ImageController::class)->middleware('auth');
Route::get('signup', function () {
    return view('signup');
});
