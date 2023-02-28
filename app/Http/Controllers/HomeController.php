<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;

class HomeController extends Controller
{

   public function index(): Factory|View|Application | array
    {

//        $query = DB::insert("INSERT INTO posts (title, content)  VALUES (:title,:content)"
//            ,['title' => "Статья 6",'content' => "Lorem ipsum 6"]);
//
//        var_dump($query);

//        DB::delete("DELETE FROM posts WHERE id = :id",["id" => 6 ]);

       //----- ЗАПРОСЫ ДЛЯ ПАГИНАЦИИ И ВЫБОРКИ ДАННЫХ ПО ЛИМИТУ ----
//        $data =  DB::table('country')
//            ->select('Code','Name')
//            ->limit(10)
//            ->get();

       //  ----- ЗАПРОС ДЛЯ СОРТИРОВАНИЯ СПИСКА ПО ИМЕНИ КОЛОНКИ ------  С НАЧАЛА - ASC : С КОНЦА - DESC
//       $data =  DB::table('city')
//           ->select('Code','Name')
//           ->orderBy('Code','desc')
//           ->first();

//       $data =  DB::table('city')
//           ->select('Id','Name')
//           ->find(2);

//       $data =  DB::table('city')
//           ->select('Id','Name')
//           ->where([
//               ['id','<=',5],
//               ['id','>',1]
//           ])
//           ->get();

//       $data =  DB::table('city')
//           ->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')
//           ->limit(10)
//           ->join('country','city.CountryCode', '=' , 'country.Code')
//           ->orderBy('city.ID')
//           ->get();
//
//        dd($data);

       $post = new Post();
       $post->title = 'Post 2';
       $post->content = 'Lorem ipsum 2';
//       $post->save();

       $data = DB::table('posts')
           ->select('*')
           ->get();

       dump($data);

        return view('home');
    }
}
