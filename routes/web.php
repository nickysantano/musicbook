<?php

use App\Http\Controllers\MusicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [MusicController::class, 'index']);
//
//Route::view('add', 'music.addMusic')->name('addMusic');
//Route::post('add', [MusicController::class, 'store'])->name('music.store');

Route::get('/', function (){
    return redirect()->route('music.index');
});

Route::resource('music', MusicController::class);
Route::resource('user', UserController::class);

Route::view('/contact', 'contact');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
