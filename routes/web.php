<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengajuanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',  [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Clitick",
        "email" => "clitick@gmail.com",
        "image" => "photo.png"
    ]);
});

Route::get('/informasi', function () {
    return view('informasi', [
        'title' => 'Informasi',
        'name' => 'Clitick'
    ]);
});

Route::get('/detail', function () {
    return view('/event/detailEvent', [
        "title" => "Detail Event"
    ]);
});

Route::get('/myprofile', function () {
    return view('/user/profile1', [
        "title" => "My Profile"
    ]);
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event:slug}', [EventController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pengajuan', [PengajuanController::class, 'index'])->middleware('auth');;
Route::post('/pengajuan', [PengajuanController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
