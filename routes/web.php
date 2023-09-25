<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/', [LandingController::class, 'home'])->name('landing.home');
Route::get('/web', [LandingController::class, 'web'])->name('landing.web');
Route::get('/mobile', [LandingController::class, 'mobile'])->name('landing.mobile');
Route::get('/ai', [LandingController::class, 'ai'])->name('landing.ai');

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [PostsController::class, 'show'])->name('posts.show');
