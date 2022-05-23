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


Route::get('user',[sitecontroller::class,'index'])->name('user');
Route::get('login',[LoginController::class,'halamanlogin'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('about',[sitecontroller::class,'about'])->name('about');
Route::get('contact',[sitecontroller::class,'contact'])->name('contact');

Route::get('shop1',[sitecontroller::class,'shop1'])->name('shop1');
Route::get('shop2',[sitecontroller::class,'shop2'])->name('shop2');
Route::get('shop3',[sitecontroller::class,'shop3'])->name('shop3');
Route::get('shop4',[sitecontroller::class,'shop4'])->name('shop4');


Route::get('admin',[BerandaController::class,'index'])->name('admin');
Route::get('dtmenu',[AdminController::class,'index'])->name('dtmenu');
Route::get('createdata',[AdminController::class,'create'])->name('createdata');
Route::post('simpandata',[AdminController::class,'store'])->name('simpandata');
Route::get('editdata/{id}',[AdminController::class , 'edit'])->name('editedata');
Route::post('/updatedata/{id}',[AdminController::class , 'update'])->name('updatedata');
Route::get('deletedata/{id}',[AdminController::class,'delete'])->name('deletedata');

Route::group(['middleware' => ['auth']], function(){
    Route::get('home',[sitecontroller::class,'home'])->name('home');
});
