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
/**/
    /*Withers*/
    Route::get('/withers', [\App\Http\Controllers\WitherController::class, 'index'])->name('wither.index');
    Route::get('/withers/create', [\App\Http\Controllers\WitherController::class, 'create'])->name('wither.create');
    Route::post('/withers', [\App\Http\Controllers\WitherController::class, 'store'])->name('wither.store');
    Route::get('/withers/{wither}', [\App\Http\Controllers\WitherController::class, 'show'])->name('wither.show');
    Route::get('/withers/{wither}/edit', [\App\Http\Controllers\WitherController::class, 'edit'])->name('wither.edit');
    Route::patch('/withers/{wither}', [\App\Http\Controllers\WitherController::class, 'update'])->name('wither.update');
    Route::delete('withers/{wither}', [\App\Http\Controllers\WitherController::class, 'destroy'])->name('wither.destroy');

    Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
    Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
    Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

    /*Posts*/
    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
    Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::patch('/posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::delete('/posts{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');

    /*Books*/
    Route::get('/books', [\App\Http\Controllers\BookController::class, 'index'])->name('book.index');
    Route::get('/books/create', [\App\Http\Controllers\BookController::class, 'create'])->name('book.create');
    Route::post('/books', [\App\Http\Controllers\BookController::class, 'store'])->name('book.store');
    Route::get('/books/{book}', [\App\Http\Controllers\BookController::class, 'show'])->name('book.show');
    Route::get('/books/{book}/edit', [\App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
    Route::patch('/books/{book}', [\App\Http\Controllers\BookController::class, 'update'])->name('book.update');
    Route::delete('/books/{book}', [\App\Http\Controllers\BookController::class, 'destroy'])->name('book.destroy');
