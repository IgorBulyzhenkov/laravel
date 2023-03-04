@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection

@php
    $region = ['Київ','Чернігів','Чернівці','Вінниця','Миколаїв',
            'Одеса','Запоріжжя','Івано-Франківськ','Кропивницький (Кіровоград)',
            'Луганська обл.', 'Луцьк','Львів','Рівне','Суми','Тернопіль','Ужгород',
            'Харків','Херсон','Хмельницький','Черкаси','Житомир',
            'Донецька обл.','Дніпро (Дніпропетровськ)'];

    $typeCar = ['Легкові','Мото','Вантажівки','Причепи',
        'Спецтехніка','Сільгосптехніка','Автобуси','Водний транспорт',
        'Повітряний транспорт','Автобудинки'];

    $newArr = range(date('Y') - 100, date('Y'));
    $years = [];

    foreach ($newArr as $element){
        $years[$element] = $element;
    }
@endphp

@section('content')
    <div class="container mt-4">
        <div class="card w-75" style=" background: #f0f2fa; max-width: 750px;text-align: left;">
            <div class="card-header">
                <h1>Форма оголошення</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('car.store')}}" style="display: flex" class="row">
                    @csrf
                    <label class="mt-2">
                        <input type="file" class="@error('img') is-invalid @enderror" name="img">
                        @error('img')
                            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="mt-2">
                        Тип транспорту
                        <select name="type_car" style="background-color: #ffffff; text-align: left" class=" mt-2 input-group input-group-text">
                            @foreach($typeCar as $type)
                                <option value="{{$type}}"
                                        @if( old('type_car') === $type) selected  @endif
                                >{{ $type }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="mt-2">
                        Марка
                        <input type="text" name="car_brand" placeholder="" style="background-color: #ffffff; text-align: left" class="mt-2 input-group input-group-text @error('car_brand') is-invalid @enderror" value="{{ old('car_brand') }}">
                         @error('car_brand')
                            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                         @enderror
                    </label>
                    <label class="mt-2">
                        Модель
                        <input type="text" name="car_model" placeholder="" style="background-color: #ffffff; text-align: left" class=" @error('car_model') is-invalid @enderror mt-2 input-group input-group-text" value="{{ old('car_model') }}">
                         @error('car_model')
                            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                         @enderror
                    </label>
                    <label class="mt-2">
                        Пробіг
                        <input type="number" name="run" placeholder="" style="background-color: #ffffff; text-align: left" class=" @error('run') is-invalid @enderror mt-2 input-group input-group-text" value="{{ old('run') }}">
                         @error('run')
                            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="mt-2">
                        Регіон
                        <select name="region" style="background-color: #ffffff; text-align: left" class="mt-2 input-group input-group-text">
                            @foreach($region as $reg)
                                <option value="{{$reg}}"
                                        @if(old('region') === $reg) selected  @endif
                                >{{ $reg }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="mt-2">
                        Місто
                        <input type="text" name="city" placeholder="" style="background-color: #ffffff; text-align: left" class="@error('city') is-invalid @enderror mt-2 input-group input-group-text" value="{{ old('city') }}">
                         @error('city')
                            <div class="invalid-feedback" style="color: red;">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="mt-2 w-25">
                        Рік випуску
                        <select  name="year" style="background-color: #ffffff; text-align: left" id="year" class="mt-2 input-group input-group-text">
                            @foreach($years as $year)
                                <option value='{{$year}}'
                                        @if((int)old("year") === (int)$year) selected  @endif
                                >{{ $year }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="mt-2">
                        Ціна
                        <input type="number" name="price" placeholder="" style="background-color: #ffffff; text-align: left" class="@error('price') is-invalid @enderror mt-2 input-group input-group-text" value="{{ old('price') }}">
                         @error('price')
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
                    >
                        Додати авто
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
