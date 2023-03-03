<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{

   public function index(Request $request): Factory|View|Application | array
    {
        $title = 'Home';
        $name = 'Igor';

//        Cache::put('test','TEST',60);
//       echo Cache::get('test');

       if (Cache::has('posts')){
           echo "no mysql";
           $posts = Cache::get('posts');
       }else{
           $posts = Post::query()
               ->orderBy('id','desc')
               ->get();
           Cache::put('posts', $posts, 300);
       }

        return view('home',compact('title','name','posts'));
    }
}
