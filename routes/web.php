<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/events', function () {
    return view('events');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/login',[AuthManager::class, 'login'])->name('login');
Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/regist',[AuthManager::class, 'regist'])->name('regist');
Route::post('/regist',[AuthManager::class, 'registPost'])->name('regist.post');
