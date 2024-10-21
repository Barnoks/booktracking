<?php

  
use Illuminate\Support\Facades\Route\mysqli_connect;
  
use App\Http\Controllers\Auth\AuthController;
  
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('beranda');
});
Route::get('/Galeri Buku', function () {
    return view('Galeri Buku');
});
Route::get('/Data pengunjung', function () {
    return view('Data pengunjung');
});
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
