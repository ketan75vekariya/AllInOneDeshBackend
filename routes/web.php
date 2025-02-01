<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('/app/login');
});
Route::get('/app/{any}', function () {
    return view('welcome');
});

Route::get('/check_email/{token}',[AuthController::class,'validEmail']);