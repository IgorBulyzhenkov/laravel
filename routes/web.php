<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/create/add-car',[CarController::class,'create'])->name('car.create');
    Route::post('/', [CarController::class,'store'])->name('car.store');
    Route::match(['get','post'],'/send', [ContactController::class,'index'])->name('send');
    Route::get('/user/cabinet',[UserController::class,'index'])->name('user');
});


Route::group(['middleware' => 'guest'], function () {
    Route::post('/user/create', [UserController::class,'store'])->name('user.store');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/user/{show?}',[UserController::class,'show']);
});


Route::fallback(function (){
    abort('404','NOT FOUND');
});
