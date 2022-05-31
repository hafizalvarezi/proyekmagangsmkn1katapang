<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesancontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\UploadGambarController;

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
//*---GET---*//

// Route::group(['prefix' => 'admin' , 'as' => 'admin.'], function (){
//     Route::get('/beranda', function() {
//         return 'ini halaman admin';
//     });
// });

Route::get('/daftar', [siswacontroller::class, 'daftar'])->name('daftar');
Route::get('/mur', [siswacontroller::class, 'mur'])->name('mur');
Route::get('/siswa', [siswacontroller::class, 'index'])->name('siswa');
Route::get('/dashboard', [siswacontroller::class, 'dashboard'])->name('dashboard');
Route::get('/about', [siswacontroller::class, 'about'])->name('about');
Route::get('/contact', [siswacontroller::class, 'contact'])->name('contact');
Route::get('/galeri', [siswacontroller::class, 'galeri'])->name('galeri');
Route::get('hps/{id}', [siswacontroller::class, 'delete']);
Route::get('edit/{id}', [siswacontroller::class, 'showData']);
Route::get('/list', [siswacontroller::class, 'list']);
Route::get('/komentar', [siswacontroller::class, 'komentar']);
Route::get('/admin', [siswacontroller::class, 'index']);
Route::get('/eg', [siswacontroller::class, 'eg']);
Route::get('galeri1', [siswacontroller::class, 'galeri1']);
Route::get('galeri2', [siswacontroller::class, 'galeri2']);
Route::get('/pagination-with-query-string', [HomeController::class, 'pagination']);

//---POST---//
Route::post('edit', [siswacontroller::class, 'update']);
Route::post('/simpandaftar', [siswacontroller::class, 'simpandaftar'])->name('simpandaftar');
Route::post('/sign', [siswacontroller::class, 'store']);
Route::post('/loginad', [siswacontroller::class, 'authenticate']);
Route::post('/logout', [siswacontroller::class, 'logout']);
Route::post('/simpanpesan', [pesancontroller::class, 'simpanpesan'])->name('simpanpesan');
Route::post('/regismur', [KeuanganController::class, 'daftarsiswa']);
Route::post('/loginmur', [KeuanganController::class, 'authenticate']);

// KEUANGAN //
Route::post('/simpankas', [KeuanganController::class, 'simpankas'])->name('simpankas');
Route::get('kas', [KeuanganController::class, 'kas'])->name('kas');
Route::get('/uang', [KeuanganController::class, 'uang'])->name('uang');
Route::get('/set', [KeuanganController::class, 'set'])->name('set');
Route::get('/dashboard', [KeuanganController::class, 'dashboard'])->name('dashboard');
Route::get('/about', [KeuanganController::class, 'about1'])->name('about');
Route::get('/contact', [KeuanganController::class, 'contact1'])->name('contact');
Route::get('/galeri', [KeuanganController::class, 'galeridata'])->name('galeri');
Route::get('hapus/{id}', [KeuanganController::class, 'delete']);
Route::get('editt/{id}', [KeuanganController::class, 'showData']);
Route::post('update/{id}', [KeuanganController::class, 'update']);

// GURU
Route::get('/gambar',[UploadGambarController::class,'gambar']);
Route::get('/create',[UploadGambarController::class,'create']);
Route::post('/simpangambar', [UploadGambarController::class,'simpangambar'])->name('simpangambar');
Route::get('delet/{id}', [UploadGambarController::class, 'delete']);
Route::get('/uru', [UploadGambarController::class, 'uru'])->name('uru');