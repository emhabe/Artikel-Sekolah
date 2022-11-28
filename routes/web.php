<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
//admin//
Route::get('/registrasi', [LoginController::class, 'registrasi']);
Route::get('/login_admin', [LoginController::class, 'login_admin']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/artikel', [UserController::class, 'artikel']);
Route::get('/kategori', [UserController::class, 'kategori']);
Route::get('/user', [UserController::class, 'user']);
Route::post('/post_register', [LoginController::class, 'post_register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

//Tampilan//
Route::get('/index', [UserController::class, 'index']);
