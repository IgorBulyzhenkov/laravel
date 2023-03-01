@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection


@section('page')
    Sign UP
@endsection

@section('content')
    <section class="py-5 text-center container">
        <h1>SIGN UP</h1>

        <form action="{{route('contact')}}" method="post" style="
    border:1px solid;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding: 15px;
    width: 300px;
    margin: 0 auto;
    margin-top: 20px;
    ">
            @csrf
            <label style="margin-bottom: 10px;">
                Name
                <input type="text" name="name" style="
        width: 100%;
        border: 1px solid;
        border-radius: 5px;
        padding-left: 5px"
                >
            </label>
            <label style="margin-bottom: 10px;">
                Email
                <input type="email" name="email" style="
        width: 100%;
        border: 1px solid;
        border-radius: 5px;
        padding-left: 5px"
                >
            </label>
            <label style="margin-bottom: 10px;">
                Password
                <input type="password" name="password" style="
        width: 90%;
        border: 1px solid;
        border-radius: 5px;
        padding-left: 5px"
                >
            </label>
            <button type="submit" style="
    border: 1px solid;
    padding: 5px 10px;
    border-radius: 5px;"
            >Submit</button>
        </form>
    </section>
@endsection
