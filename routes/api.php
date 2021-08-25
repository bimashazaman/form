<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::resource('/users' , AuthController::class);

Route::group([

     
     
    'prefix' => 'auth'

], function () {
 
Route::get('/' , [AuthController::class, 'index']);
Route::get('/r' , [AuthController::class, 'create']);
Route::get('/login/create' , [AuthController::class, 'loginCreate']);
Route::post('/s', [AuthController::class, 'register'])->name('user.register');
Route::post('/login', [AuthController::class, 'login']);
Route::put('/update/{users}', [AuthController::class, 'update']);
Route::delete('/show/{users}', [AuthController::class, 'show']);
Route::delete('/delete/{users}', [AuthController::class, 'destroy']);

    Route::post('/signin', [AuthController::class, 'login']);
   

});