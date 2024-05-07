<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

Route::middleware(['auth', 'role:user'])->group(function () {
    // Halaman karyawan biasa
    Route::get('/karyawan', 'KaryawanController@index')->name('karyawan.index');
});

Route::middleware(['auth', 'role:hrd'])->group(function () {
    // Halaman HRD
    Route::get('/hrd', 'HrdController@index')->name('hrd.index');
});

Route::middleware(['auth', 'role:manager'])->group(function () {
    // Halaman Manager
    Route::get('/manager', 'ManagerController@index')->name('manager.index');
});

// routes/web.php

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/', function () {
    return view('layout.login');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/barang/add', function () {
    return view('barang.formadd');
});

Route::resource('barang',BarangController::class);