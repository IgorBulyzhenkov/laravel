@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="album py-5">
        <div class="container">

            <ul class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-2" style="padding: 0">
                @foreach($cars as $car)
                    <li class = "col card shadow-sm m-1" style="padding-left: 0; padding-right: 0;width: 200px; height: 230px;" >
                        <img src='{{ asset("storage/{$car->img}")}}' alt="{{$car->name_img}}" class = "img" />
                            <div class = "containerText">
                                <p class = "text">
                                    {{ $car->car_brand }} {{ $car->car_model }} {{ $car->year }}
                                </p>
                                <p class = "price" >
                                    {{ $car->price}}$<span class = "run" > {{ $car->run }} тис. км </span>
                                </p>
                            </div>
                        <form action="/delete/{{$car->id}}&{{$car->user_id}}" method="post" style="text-align: center; margin-top: 5px; margin-bottom: 5px">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-info">
                                Видалити
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
