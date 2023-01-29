<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostlistController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [HomeController::class, 'hello']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/projects', [ProjectController::class, 'index']);
Auth::routes();

Route::prefix('postlist')->middleware('auth')->group(function(){
  Route::get('/', [PostlistController::class, 'index']);
  
  Route::get('/create', [PostlistController::class, 'create']);
  
  Route::post('/', [PostlistController::class, 'store']);
  
  Route::get('/{post}', [PostlistController::class, 'show']);
  
  Route::get('/{post}/edit', [PostlistController::class, 'edit']);
  
  Route::put('/{post}', [PostlistController::class, 'update']);
  
  Route::delete('/{post}', [PostlistController::class, 'destroy']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
