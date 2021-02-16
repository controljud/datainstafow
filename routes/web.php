<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profiles', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profiles/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile');
    Route::get('/profiles/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
