<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesancontroller;
use App\Http\Controllers\siswacontroller;

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
route::get('/siswa', function(){
    return view('siswa');
});
route::get('/loginad', function(){
    return view('loginad');
});
route::get('/sign', function(){
    return view('sign');
});

route::get('/set', function(){
    return view('set');
});
//*---GET---*//
Route::get('/daftar', [siswacontroller::class, 'daftar'])->name('daftar');
Route::get('/mur', [siswacontroller::class, 'mur'])->name('mur');
Route::get('/siswa', [siswacontroller::class, 'index'])->name('siswa');
Route::get('/dashboard', [siswacontroller::class, 'dashboard'])->name('dashboard');
Route::get('/about', [siswacontroller::class, 'about'])->name('about');
Route::get('/contact', [siswacontroller::class, 'contact'])->name('contact');
Route::get('/galeri', [siswacontroller::class, 'galeri'])->name('galeri');
Route::get('delete/{id}', [siswacontroller::class, 'delete']);
Route::get('edit/{id}', [siswacontroller::class, 'showData']);
Route::get('/list', [siswacontroller::class, 'list']);
Route::get('/admin', [siswacontroller::class, 'index']);
Route::get('/eg', [siswacontroller::class, 'eg']);

//---POST---//
Route::post('edit', [siswacontroller::class, 'update']);
Route::post('/simpandaftar', [siswacontroller::class, 'simpandaftar'])->name('simpandaftar');
Route::post('/sign', [siswacontroller::class, 'store']);
Route::post('/loginad', [siswacontroller::class, 'authenticate']);
Route::post('/logout', [siswacontroller::class, 'logout']);
Route::post('/simpanpesan', [pesancontroller::class, 'simpanpesan'])->name('simpanpesan');