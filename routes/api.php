<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LevelController;

Route::get('levels', [LevelController::class, 'index']);         
Route::post('levels', [LevelController::class, 'store']);       
Route::get('levels/{level}', [LevelController::class, 'show']);  
Route::put('levels/{level}', [LevelController::class, 'update']);     
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
