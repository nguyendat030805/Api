<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\mockApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Api',[ApiController::class,'getData']);

Route::resource('/products', mockApiController::class);