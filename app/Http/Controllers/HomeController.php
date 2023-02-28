<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(): Factory|View|Application | array
    {

//        $query = DB::insert("INSERT INTO posts (title, content)  VALUES (:title,:content)"
//            ,['title' => "Статья 6",'content' => "Lorem ipsum 6"]);
//
//        var_dump($query);

//        DB::delete("DELETE FROM posts WHERE id = :id",["id" => 6 ]);

        $data = DB::select("SELECT * FROM posts");
        dump($data);
        return view('home');
    }
}
