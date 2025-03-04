<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProductsController extends Controller
{
    public function index(){
        if (!Schema::hasTable('product2')){
            Schema::create('products2',function ($table){
                $table->increments('id');
                $table->string('name');
                $table->decimal('price', 10, 2); 
                $table->string('image'); 
                $table->timestamps();
            });
        }
        return 'Done';
    }
}
