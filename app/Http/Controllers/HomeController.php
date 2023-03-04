<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

   public function index(Request $request): Factory|View|Application | array
    {
        $title = 'Home';

           $cars = Car::query()
               ->orderBy('id','desc')
               ->get();

        return view('home',compact('title','cars'));
    }
}
