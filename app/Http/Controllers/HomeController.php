<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;

class HomeController extends Controller
{

   public function index(): Factory|View|Application | array
    {
        $title = 'Home';
        $name = 'Igor';

        $posts = Post::query()
            ->orderBy('id','desc')
            ->get();

        return view('home',compact('title','name','posts'));
    }
}
