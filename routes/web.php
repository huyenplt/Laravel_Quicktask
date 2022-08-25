<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;

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
})->name('client');

Route::resource('users', UserController::class)->middleware('admin');

Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/create', 'create')->name('create');
    Route::get('/{post}', 'show')->name('show');
    Route::get('/{post}/edit', 'edit')->name('edit');
    Route::put('/{post}', 'update')->name('update');
    Route::delete('/{post}', 'destroy')->name('destroy');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}', [LangController::class, 'changeLang'])->middleware('locale')->name('lang');
