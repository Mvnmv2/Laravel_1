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

Route::get('/wither',[\App\Http\Controllers\WitherController::class, 'index']);

Route::get('/wither/create',[\App\Http\Controllers\WitherController::class, 'create']);

Route::get('/about',[\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/main',[\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/contact',[\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/posts',[\App\Http\Controllers\PostController::class, 'index'])->name('post.index');

