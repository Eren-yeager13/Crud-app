<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\ProductsContraller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});

//connection avec la base de donne
Route::get('/connection', function(){
    return view('connection');
});

//Crud 
Route::get("/Products",[ProductsContraller::class,'index']);
Route::get("/Products/create",[ProductsContraller::class,'create']);
Route::post("/Products",[ProductsContraller::class,'store'])->name('Product.store');
Route::get('/Products/{id}',[ProductsContraller::class,'delete']);
Route::get('/Products/{product}/Edite',[ProductsContraller::class,'edite'])->name("Products.edite");
Route::put('/Products/{product}/Edite',[ProductsContraller::class,'update'])->name("Products.update");
