<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth')->name('profile');
Route::get('/events',[EventsController::class,'index'])->middleware('auth')->name('events');
Route::get('/login',[AuthController::class,'indexlogin'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/register',[AuthController::class,'indexregister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register.submit');
Route::get('/logout',[AuthController::class,'indexlogout'])->middleware('auth')->name('logout');


