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

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [HomeController::class, 'hello']);

Route::get('/contact', [HomeController::class, 'contact']);

use App\Http\Controllers\ProjectController;
Route::get('/projects', [ProjectController::class, 'index']);
Auth::routes();

use App\Http\Controllers\PostlistController;
Route::get('/postlist', [PostlistController::class, 'index']);

Route::get('/postlist/create', [PostlistController::class, 'create']);

Route::post('/postlist', [PostlistController::class, 'store']);

Route::get('/postlist/{post}', [PostlistController::class, 'show']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
