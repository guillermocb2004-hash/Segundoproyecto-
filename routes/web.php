<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCrontoller;
use App\Http\Controllers\PrincipalController;

Route::get('/hello',HomeController::class);
Route::get('/', function () {
    return view('welcome');
});
