@extends('layouts.layout')

@section('title')
    Contact
@endsection

@section('page')
    Contact
@endsection

@section('content')
    <form action="{{route('contact')}}" method="post" style="
    border:1px solid;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    height: 180px;
    width: 300px;
    margin: 0 auto;
    margin-top: 20px;
    ">
        @csrf
        <label style="margin-bottom: 10px; margin-right: 10px">
            Name
            <input type="text" name="name" style="
        width: 100%;
        border: 1px solid;
        border-radius: 5px;
        padding-left: 5px"
            >
        </label>
        <label style="margin-bottom: 10px; margin-right: 10px">
            Email
            <input type="email" name="email" style="
        width: 100%;
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
@endsection
