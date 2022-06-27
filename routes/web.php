<?php

use App\Http\Controllers\PetController;
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

Route::get('/', function () {
    return view('welcome');
});
//dashboard
Route::get('dashboard',[PetController::class,'dashboard'])->name('dashboard'); 

// kontak kami
Route::get('contact',[PetController::class,'contact'])->name('contact');

// tabel
Route::get('home',[PetController::class,'home'])->name('home');
Route::get('create',[PetController::class,'create'])->name('create');
Route::get('delete/{id}',[PetController::class,'delete'])->name('delete');
Route::get('edit/{id}',[PetController::class,'edit'])->name('edit');
Route::post('simpan',[PetController::class,'simpan'])->name('simpan');
Route::post('update/{id}',[PetController::class,'update'])->name('update');

// maps
Route::get('maps',[PetController::class,'maps'])->name('maps');