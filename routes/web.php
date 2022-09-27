<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\PostController;

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
Route::resource('user',UserController::class);
Route::resource('post',PostController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('post-recycles',[PostController::class,'recycle'])->name('post.recycle');
Route::post('post-restore/{id}', [PostController::class, 'restore'])->name('post.restore');
Route::delete('post-permanent/delete/{id}', [PostController::class, 'forceDelete'])->name('post.forceDelete');



Route::get('user-recycles',[UserController::class,'recycle'])->name('user.recycle');
Route::post('user/{id}', [UserController::class, 'restore'])->name('user.restore');
Route::delete('user_permanent/delete/{id}', [UserController::class, 'forceDelete'])->name('user.forceDelete');



