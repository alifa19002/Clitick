<?php

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
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

Route::get('/editevent', function () {
    return view('/event/editEvent', [
        "title" => "Edit Event"
    ]);
});

Route::get('/detail', function () {
    return view('/event/detailEvent', [
        "title" => "Detail Event"
    ]);
});

Route::get('/profile/{username}', function ($username) {
    $title = "My Profile";
    $username = User::where('username', $username)->first()->username;
    $id = User::where('username', $username)->first()->id;
    $my_events = Event::where('user_id', $id)->get();
    $category = Category::all();
    return view('/user/profile', compact(['title', 'my_events', 'category']));
});

Route::get('/editprofile', function () {
    return view('/user/editProfile', [
        "title" => "Edit Profile"
    ]);
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event:slug}', [EventController::class, 'show']);

Route::get('/pembayaran/{id}', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/pembayaran', [PembayaranController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pengajuan', [PengajuanController::class, 'index'])->middleware('auth');
Route::post('/pengajuan', [PengajuanController::class, 'store']);

Route::get('/dashboard/request', function () {
    $title = "Dashboard Admin";
    $events = Event::where('status_event', 'requested')->get();
    return view('admin.request', compact(['title', 'events']));
})->middleware('auth');

Route::get('/dashboard/events/checkSlug', [DashboardEventController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/events', DashboardEventController::class)->middleware('auth');
Route::resource('/profile', UserController::class)->middleware('auth');
