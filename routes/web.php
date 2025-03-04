<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\mockApiController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopeeController;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Api',[ApiController::class,'getData']);

Route::resource('/products', mockApiController::class);
Route::get('/Page',[PageController::class,'index']);
Route::get('/Shopee',[ShopeeController::class,'index']);
// Route::get('/database',function(){
//     Schema::create('Products',function($table){
//         $table->increments('id');
//         $table->string('name');
//         $table->decimal('price', 10, 2); 
//         $table->string('image'); 
//         $table->timestamps();
//     });
//     echo 'Đã hoàn thiện tạo bảng';
// });
Route::get('/Database2',[ProductsController::class,'index']);