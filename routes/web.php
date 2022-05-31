<?php

use App\Http\Controllers\akuncontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pesancontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\UploadGambarController;
use App\Models\UploadGambar;

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
Route::get('eg2', function () {
    return view('eg2');
});
Route::get('eg3', function () {
    return view('eg3');
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


//GET//
Route::get('/daftar', [siswacontroller::class, 'daftar'])->name('daftar');
Route::get('/mur', [siswacontroller::class, 'mur'])->name('mur');
Route::get('/siswa', [siswacontroller::class, 'index'])->name('siswa');
Route::get('/dashboard', [siswacontroller::class, 'dashboard'])->name('dashboard');
Route::get('/about', [siswacontroller::class, 'about'])->name('about');
Route::get('/contact', [siswacontroller::class, 'contact'])->name('contact');
Route::get('/galeri', [siswacontroller::class, 'galeri'])->name('galeri');
Route::get('delete/{id}', [siswacontroller::class, 'delete']);
Route::get('edit/{id}', [siswacontroller::class, 'showData']);
Route::get('/komentar', [siswacontroller::class, 'komentar']);
Route::get('/list', [siswacontroller::class, 'list']);
Route::get('/admin', [siswacontroller::class, 'index']);
Route::get('/eg', [siswacontroller::class, 'eg']);
Route::get('/pagination-with-query-string', [HomeController::class, 'pagination']);

//---POST---//
Route::post('edit', [siswacontroller::class, 'update']);
Route::post('/simpandaftar', [siswacontroller::class, 'simpandaftar'])->name('simpandaftar');
Route::post('/sign', [siswacontroller::class, 'store']);
Route::post('/loginad', [siswacontroller::class, 'authenticate']);
Route::post('/logout', [siswacontroller::class, 'logout']);
Route::post('/simpanpesan', [pesancontroller::class, 'simpanpesan'])->name('simpanpesan');

// KEUANGAN //
Route::post('/simpankas', [KeuanganController::class, 'simpankas'])->name('simpankas');
Route::get('/uang', [KeuanganController::class, 'uang'])->name('uang');
Route::get('kas', [KeuanganController::class, 'kas'])->name('kas');
Route::get('hapus/{id}', [KeuanganController::class, 'hapus']);
Route::get('kasad', [KeuanganController::class, 'kasad'])->name('kasad');
Route::get('editkas',[KeuanganController::class, 'editkas'])->name('editkas');

//Dashboard//
Route::get('/dashboard', [akuncontroller::class, 'dashboard'])->name('dashboard');
Route::get('/about', [akuncontroller::class, 'about1'])->name('about');
Route::get('/contact', [akuncontroller::class, 'contact1'])->name('contact');
Route::get('/galeri', [akuncontroller::class, 'galeridata'])->name('galeri');
Route::get('galeri1', [akuncontroller::class, 'galeri1']);
Route::get('galeri2', [akuncontroller::class, 'galeri2']);
Route::get('profile', [akuncontroller::class, 'profile']);

//Profile//
Route::post('/regismur', [akuncontroller::class, 'daftarsiswa']);
Route::post('/loginmur', [akuncontroller::class, 'authenticate']);
Route::post('/keluar', [akuncontroller::class, 'keluar']);
Route::get('/loginmur', [akuncontroller::class, 'loginmur'])->name('loginmur');
Route::get('/regismur', [akuncontroller::class, 'regismur'])->name('regismur');
Route::post('/loginmur', [akuncontroller::class, 'authenticate']);

//Upload
Route::get('guru', [UploadGambarController::class, 'guru']);
Route::get('gurued', [UploadGambarController::class, 'gurued']);
Route::get('/buat',[UploadGambarController::class,'buat']);
Route::post('/simpangambar', [UploadGambarController::class,'simpangambar'])->name('simpangambar');
Route::get('hapus1/{id}', [UploadGambarController::class, 'hapus1']);
