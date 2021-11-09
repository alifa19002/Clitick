<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('user/home', [
        'title' => 'Home'
    ]);
});

Route::get('/informasi', function () {
    return view('informasi' , [
        'title' => 'Informasi',
        'name' => 'Clitick'
    ]);
});

Route::get('/detail', function () {
    return view('/event/detailEvent' , [
        "title" => "Detail Event"
    ]);
});

Route::get('/myprofile', function () {
    return view('/user/profile1' , [
        "title" => "My Profile"
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);