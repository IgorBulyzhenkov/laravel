<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{

    public function create(): \Illuminate\Foundation\Application|Factory|View|Redirector|RedirectResponse|Application
    {
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

        $car->saveCar($request);
        $request->session()->flash('success', "Данні збереженні!");
        return redirect('/user');
    }
}
