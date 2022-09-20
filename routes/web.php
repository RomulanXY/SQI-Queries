<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
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
// to welcome page
Route::get('/', [WelcomeController::class, 'index']) -> name('welcome.index');


// to blog page
Route::get('/blog', [BlogController::class, 'index']) -> name('blog.index');

// to single post
Route::get('/blog/single-post', [BlogController::class, 'show']) -> name('blog.show');

// to create post
Route::get('/new-post', [BlogController::class, 'create']) -> name('blog.create');

// to store post on database
Route::post('/blog', [BlogController::class, 'store']) -> name('blog.store');


// to about page
Route::get('/about', [AboutController::class, 'index']) -> name('about.index');

// to contact page
Route::get('/contact-us', [ContactController::class, 'index']) -> name('contact.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
