<?php

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user',function(){
return Users::all();
});

Route::post('/users', 
 [UserController::class, 'userStore']);

 Route::put('/users/{id}', 
 [UserController::class, 'userput']);

 Route::delete('/users/{id}', 
 [UserController::class, 'userdestroy']);

// Route::put('/posts/{post}', [UserController::class, 'update']);
    


