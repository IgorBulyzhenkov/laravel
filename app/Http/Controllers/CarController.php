<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{

    public function create(): \Illuminate\Foundation\Application|Factory|View|Redirector|RedirectResponse|Application
    {
        $carCountUser = Car::query()->where('user_id' , Auth::user()->id)->count();

        if($carCountUser >= 3){
            return redirect(route('info'));
        }

        $title = 'Add car';
        if ($_POST){
            dump($_POST['img']);
        }
        return view('car.addCar',compact('title'));
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|Application|RedirectResponse
    {
        $car = new Car();

        Validator::make($request->all(),$car->rules(),$car->messageError())->validate();

        if ($request->hasFile('img')){
            $folder = date('Y-M-d');
            $pathImg = $request->file('img')->store("images/{$folder}");
            $origNameImg = $request->file('img')->getClientOriginalName();
            $car->saveCar($request,$pathImg,$origNameImg);

            $request->session()->flash('success', "Об'яву успішно додано!");
            return redirect(route('user'));
        }
        $request->session()->flash('error', "Данні не збереженні!");
        return redirect('/create/add-car');
    }
}
