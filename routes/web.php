<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


Route::view('/','welcome')->name('welcome');
Route::view('/contact','home.contact')->name('home.contact');
Route::get('/register', [HomeController::class, 'manager'])->name('manager');
Route::post('/simpan', [HomeController::class, 'simpan'])->name('simpan');
Auth::routes();


// Route::get('/user', [UserController::class, 'user'])->name('user');
// Route::get('/deleteuser/{p}', [UserController::class, 'deleteuser'])->name('deleteuser');
// Route::get('/tambahuser', [UserController::class, 'tambahuser'])->name('tambahuser');
// Route::post('/insertuser',[UserController::class,'insertuser'])->name('insertuser');

Route::middleware(['auth', 'user-access:Admin'])->group(function() {
    Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'user-access:manager'])->group(function() {

    Route::get('/manager/home',[HomeController::class, 'managerHome'])->name('manager.home');
});

Route::middleware(['auth', 'user-access:user'])->group(function() {
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::resource('/posts', PostsController::class);
});



