<?php

use App\Models\products;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('name/{name}',function($name){

$user=User::query()->get();
return view('name', compact('user'));

});



Route::get('products',function(){

$products=products::query()->get();
return view('name', compact('products'));

});
