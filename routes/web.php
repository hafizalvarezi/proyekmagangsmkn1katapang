<?php

use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
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

//route user
Route::get('user',[sitecontroller::class,'index'])->name('user');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home',[sitecontroller::class,'home'])->name('home');
Route::get('registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('about',[sitecontroller::class,'about'])->name('about');
Route::get('contact',[sitecontroller::class,'contact'])->name('contact');
Route::get('shop',[sitecontroller::class,'shop'])->name('shop');

//route admin
Route::get('admin',[BerandaController::class,'index'])->name('admin');
Route::get('dtmenu',[AdminController::class,'index'])->name('dtmenu');
Route::get('createdata',[AdminController::class,'create'])->name('createdata');
Route::post('simpandata',[AdminController::class,'store'])->name('simpandata');
Route::get('editdata/{id}',[AdminController::class , 'edit'])->name('editedata');
Route::post('/updatedata/{id}',[AdminController::class , 'update'])->name('updatedata');
Route::get('deletedata/{id}',[AdminController::class,'delete'])->name('deletedata');