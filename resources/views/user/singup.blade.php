@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card w-75" style=" background: #f0f2fa; max-width: 750px;text-align: left;">
            <div class="card-header">
                <h1>Зареєструватися</h1>
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" method="post" style="display: flex" class="row">
                        @csrf
                        <label style="margin-bottom: 10px;">
                            І'мя
                            <input type="text" name="name"  value="{{ old('name') }}"
                                   style="text-align: left"
                                   class="@error('name') is-invalid @enderror mt-2 input-group input-group-text"
                            >
                            @error('name')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                            @enderror
                        </label>
                        <label style="margin-bottom: 10px;">
                            Email
                            <input type="email" name="email"  value="{{ old('email') }}"
                                   style="text-align: left"
                                   class="@error('email') is-invalid @enderror mt-2 input-group input-group-text"
                            >
                            @error('email')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                            @enderror
                        </label>
                        <label style="margin-bottom: 10px;">
                            Пароль
                            <input type="password" name="password"
                                   style="text-align: left"
                                   class="@error('password') is-invalid @enderror mt-2 input-group input-group-text"
                            >
                            @error('password')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                            @enderror
                        </label>
                        <label style="margin-bottom: 10px;">
                            Повторіть пароль
                            <input type="password" name="password_confirmation"
                                   style="text-align: left"
                                   class="@error('password') is-invalid @enderror mt-2 input-group input-group-text"
                            >
                            @error('password_confirmation')
                                <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                            @enderror
                        </label>
                        <button type="submit" class="btn w-25 mt-3"
                                style="
                            margin: 0 auto;
                            display:block;
                            margin-top:10px;
                            background: #db5c4c;
                            border:none;
                            color:#fff"
                        >Зареєструватися</button>
                    </form>
            </div>
        </div>
    </div>

@endsection
