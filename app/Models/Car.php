<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';

    protected $attributes = [
        'user_id' => '765'
    ];

    public function rules(): array
    {
        return [
            'img' => 'required|image',
            'type_car' => 'required',
            'car_brand' => 'required',
            'car_model' => 'required',
            'run' => 'required|integer',
            'region' => 'required',
            'city' => 'required',
            'year' => 'required|integer',
            'price' => 'required|integer',
        ];
    }

    public function messageError(){
        return [
            'img.required' => 'Потрібно додати файл',
            'img.image' => 'Файл повинен бути зображенням',
            'type_car.required' => 'Поле повинно бути заповнене',
            'car_brand.required' => 'Поле повинно бути заповнене',
            'car_model.required' => 'Поле повинно бути заповнене',
            'run.required' => 'Поле повинно бути заповнене',
            'region.required' => 'Поле повинно бути заповнене',
            'city.required' => 'Поле повинно бути заповнене',
            'year.required' => 'Поле повинно бути заповнене',
            'price.required' => 'Поле повинно бути заповнене',
        ];
    }

    public function saveCar($request,$pathImg,$origNameImg){
        DB::table('car')->insert([
            'img' => $pathImg,
            'name_img' => $origNameImg,
            'user_name' =>Auth::user()->name,
            'user_id' => Auth::user()->id,
            'type_car' => $request->input('type_car'),
            'car_brand' => $request->input('car_brand'),
            'car_model' => $request->input('car_model'),
            'run' => $request->input('run'),
            'region' => $request->input('region'),
            'city' => $request->input('city'),
            'year' => $request->input('year'),
            'price' => $request->input('price'),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
