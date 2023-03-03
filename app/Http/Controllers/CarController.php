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

    public function create(): Factory|View|Application
    {
        $title = 'Add car';
        if ($_POST){
            dump($_POST['img']);
        }
        $name = "Igor";
        return view('car.addCar',compact('title','name'));
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Redirector|Application|RedirectResponse
    {

        $car = new Car();

        Validator::make($request->all(),$car->rules(),$car->messageError())->validate();

        $car->saveCar($request);
        $request->session()->flash('success', "Данні збереженні!");
        return redirect('/user');
    }
}
