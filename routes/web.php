<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;

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
    return view('frontend.home.index');
})->name('homepage');

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//FITUR MENU DASHBOARD
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');


Route::get('/dashboard/hitung', [HitungController::class, 'perhitungan'])->name('hitung')->middleware('auth');
Route::get('/dashboard/ranking', [RankingController::class, 'perhitungan'])->name('ranking')->middleware('auth');

// route resources
Route::resource('/dashboard/alternatif', AlternatifController::class)->middleware('auth');
Route::resource('/dashboard/kriterias', KriteriaController::class)->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');


//edit user password
Route::get('/dashboard/user/edit/password', [UserController::class, 'passwordIndex'])->name('editPassword')->middleware('auth');
Route::put('/dashboard/user/edit/password', [UserController::class, 'updatePassword'])->name('passwordUpdate')->middleware('auth');


//edit profile per user
Route::get('/dashboard/user/edit/profile', [UserController::class, 'profileIndex'])->name('editProfile')->middleware('auth');
Route::put('/dashboard/user/edit/profile', [UserController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');

