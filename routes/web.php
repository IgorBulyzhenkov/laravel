<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::match(['post','get'],'user/{show?}',[UserController::class,'show']);

//Route::match(['post','get'],'/contact',function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//})->name('contact');

Route::resource('/posts', PostController::class);

Route::get('/create/add-car',[CarController::class,'create'])->name('car.create');
Route::post('/', [CarController::class,'store'])->name('car.store');

Route::fallback(function (){
    abort('404','NOT FOUND');
});

//Route::get('user/singup',[PageController::class,'singup'])->name('singup');
//
//Route::get('user/',[PageController::class,'index'])->name('user');

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/',function (){
//    return view('home');
//})->name('home');

//Route::match(['post','get'],'/user/login',function (){
//    return view('user/login');
//})->name('login');
//
//Route::match(['post','get'],'/user/singup',function (){
//    return view('user/singup');
//})->name('singup');
//
//Route::match(['get','delete'],'/user',function (){
//    return view('user/index');
//})->name('user');
////
////
////Route::get('/login',function (){
////    return view('login');
////});
////
//Route::match(['post','get'],'/contact',function (){
//    if(!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//})->name('contact');
//
//Route::get('/post/{id}&{name}',function ($id,$name){
//   return "Post $id | $name";
//})->name('post');
//
//Route::prefix('admin')->group(function (){
//    Route::get('/posts',function (){
//        return 'Posts GET';
//    })->name('posts');
//
//    Route::get('/post/create',function (){
//        return 'Post Create';
//    })->name('post_create');
//
//    Route::get('/post/{id}/edit',function ($id){
//        return "Edit $id Post";
//    })->name('post-edit');
//});

