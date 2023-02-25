<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($show = 'index'): Factory|View|Application
    {
        return view("user.$show");
    }
//
//    public function singup(): Factory|View|Application
//    {
//        return view('user.singup');
//    }
//
//    public function index(): Factory|View|Application
//    {
//        return view('user.index');
//    }
}
