@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection


@section('content')
    <div class="container" >
        <h3 class="text-danger mt-2">У Вас вже є три оголошення, видаліть одне, щоб можна було додати ще!</h3>
        <p class="text-danger mt-2"> Для того щоб видалити перейдіть до свого кабінету </p>
        {{\Illuminate\Support\Facades\Auth::user()->name}} -> <a href="{{route('user')}}" class="link-info">Ваш кабінет</a>
    </div>
@endsection

