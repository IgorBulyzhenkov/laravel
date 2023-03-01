<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($show = 'index'): Factory|View|Application
    {

        $title = match ($show){
            'login' => 'Login',
            'singup' => 'Sing Up',
            'car' => 'Add car',
            default => 'User Cabinet'
        };

        $name = "Igor";

        return view("user.$show",compact('title','name'));
    }

}
