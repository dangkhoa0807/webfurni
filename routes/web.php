<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('/')->group(function() {
    Route::get('' ,function (){
        return view('clients.home');
    });
    Route::get('/shop' ,function (){
        return view('clients.shop');
    });
    Route::get('/about',function (){
        return view('clients.about');
    });
    Route::get('/services',function (){
        return view('clients.service');
    });
    Route::get('/blog',function (){
        return view('clients.blog');
    });
    Route::get('/contact',function (){
        return view('clients.contact');
    });
});
