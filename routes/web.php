<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('user/{show?}',[PageController::class,'show']);

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

Route::fallback(function (){
    abort('404','NOT FOUND');
});
