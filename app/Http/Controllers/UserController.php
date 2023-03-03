<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function show( $show = 'index'): Factory|View|Application
    {

        $title = match ($show){
            'login' => 'Login',
            'singup' => 'Sing Up',
            default => 'User Cabinet'
        };
//        Cookie::queue('name','Igor',5);

        $name = "Igor";

        return view("user.$show",compact('title','name'));
    }

}
