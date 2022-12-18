<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;

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
//proses admin//
Route::get('/registrasi', [LoginController::class, 'registrasi']);
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/post_register', [LoginController::class, 'post_register']);
Route::post('/postlogin', [LoginController::class, 'postlogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/komen', [UserController::class, 'komen']);


//Tampilan//
Route::get('/', [ArtikelController::class, 'index']);
Route::get('/detail_berita/{id}', [ArtikelController::class, 'detail_berita']);
Route::get('/kategori_berita/{id}', [ArtikelController::class, 'kategori_berita']);
Route::get('/test', [ArtikelController::class, 'test']);
//tampilan admin//
Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/artikel', [UserController::class, 'artikel']);
    Route::get('/kategori/{id}', [UserController::class, 'kategori']);
    Route::get('/user', [UserController::class, 'user']);
    Route::get('/buat_artikel', [UserController::class, 'buat_artikel']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update/{id}', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
    Route::post('/submit_artikel', [UserController::class, 'submit_artikel']);
    Route::get('/lihat_artikel/{id}', [UserController::class, 'lihat_artikel']);
    Route::post('/publish', [UserController::class, 'publish']);
});
