@extends('layouts.layout')

@section('title')
    Send email
@endsection

@section('content')
    <div class="container mt-4">
{{--        <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--            Лист відправленно Вам на почту!--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--        </div>--}}
        <form action="{{route('send')}}" method="post" style="
                background-color: #f0f2fa;
                border:1px solid;
                border-radius: 5px;
                display: flex;
                justify-content: center;
                flex-direction: column;
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
                    width: 100%;
                    border: 1px solid;
                    border-radius: 5px;
                    padding-left: 5px"
                >
            </label>
            <button type="submit" class="btn-danger bg-warning-subtle" style="
                width: 180px;
                margin:0 auto;
                border: 1px solid;
                padding: 5px 10px;
                border-radius: 5px;"
            >send</button>
        </form>
    </div>
@endsection
