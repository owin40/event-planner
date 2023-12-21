<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index');
Route::view('/admin', 'admin')->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register',[AuthManager::class, 'regist'])->name('regist');
Route::post('/register',[AuthManager::class, 'registPost'])->name('regist.post');
Route::get('/regist',[AuthManager::class, 'regist'])->name('regist');
Route::post('/regist',[AuthManager::class, 'registPost'])->name('regist.post');

// routes/web.php
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
// ... other routes


Route::get('/register', [AuthManager::class, 'regist'])->name('regist');
Route::post('/register', [AuthManager::class, 'registPost'])->name('regist.post');
Route::get('/regist', [AuthManager::class, 'regist'])->name('regist');
Route::post('/regist', [AuthManager::class, 'registPost'])->name('regist.post');

// routes/web.php
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
// ... other routes

require __DIR__ . '/auth.php';