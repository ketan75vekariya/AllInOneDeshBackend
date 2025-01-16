<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MemberController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function(){
    Route::post('/register','register');
    Route::post('/login','login');
});

Route::controller(ProjectController::class)->group(function(){
    Route::post('/projects','store');
    Route::put('/projects','update');
    Route::get('/projects','index');
    Route::post('/projects/pinned','pinnedProject');
});
Route::controller(MemberController::class)->group(function(){
    Route::post('/members','store');
    Route::put('/members','update');
    Route::get('/members','index');
});