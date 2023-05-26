<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class,'login']);

Route::group(['middleware'=>['jwt.auth']],function(){
    Route::get('myposts',[UserController::class,'index']);
    Route::post('logout',[AuthController::class,'logout']);
});
