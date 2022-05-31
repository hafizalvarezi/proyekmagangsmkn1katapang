<?php

use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GambarController;
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

Route::get('admin',[BerandaController::class,'index'])->name('admin');
Route::get('dtmenu',[AdminController::class,'index'])->name('dtmenu');
Route::get('dtpesanan',[AdminController::class,'pesanan'])->name('dtpesanan');
Route::get('shop',[sitecontroller::class,'shop'])->name('shop');

//route admin
Route::get('admin',[BerandaController::class,'index'])->name('admin');
Route::get('dtmenu',[AdminController::class,'index'])->name('dtmenu');
Route::get('createdata',[AdminController::class,'create'])->name('createdata');
Route::post('simpandata',[AdminController::class,'store'])->name('simpandata');
Route::get('editdata/{id}',[AdminController::class , 'edit'])->name('editedata');
Route::post('/updatedata/{id}',[AdminController::class , 'update'])->name('updatedata');
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');

Route::group(['middleware' => ['auth']], function(){
    Route::get('home',[sitecontroller::class,'home'])->name('home');
});

Route::get('data_gambar',[GambarController::class,'index'])->name('data_gambar');
Route::get('create_gambar',[GambarController::class,'create'])->name('create_gambar');
Route::post('simpangambar',[GambarController::class,'store'])->name('simpangambar');
Route::get('deletedata/{id}',[GambarController::class,'delete'])->name('deletedata');
Route::get('editdata/{id}',[GambarController::class , 'edit'])->name('editedata');
Route::post('/updatedata/{id}',[GambarController::class , 'update'])->name('updatedata');

Route::get('beli/{id}',[sitecontroller::class ,'beli'])->name('beli');
Route::post('/simpan',[sitecontroller::class , 'store'])->name('simpan');
Route::get('selesai/{id}',[sitecontroller::class , 'delete'])->name('selesai');
Route::get('deletedata/{id}',[AdminController::class,'delete'])->name('deletedata');
