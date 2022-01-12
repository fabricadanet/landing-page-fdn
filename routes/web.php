<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{

    ProfileController,
    HomeController,
};


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
    return view('site.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/site', 'site.index');

Route::middleware('auth')->group(function () {
    Route::view('about', 'admin.about')->name('about');

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});