<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $title = 'User Cabinet';
        $cars = Car::query()
            ->where('user_id' , Auth::user()->id)
            ->get();

        return view("user.cabinet",compact('title','cars'));
    }

    public function info(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $title = 'Info';
        return view('user.info',compact('title'));
    }

    public function show( $show = 'login' ): Factory|\Illuminate\Foundation\Application|View|Application
    {
            $title = match ($show){
                'login' => 'Login',
                'singup' => 'Sing Up',
                default => ''
            };
            return view("user.$show",compact('title'));
    }


    public function store(Request $request): \Illuminate\Foundation\Application|Redirector|Application|RedirectResponse
    {

        $request->validate([
           'name' => 'required',
           "email" => 'required|email|unique:users',
           'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        Auth::login($user);
        session()->flash('success', "Ви успішно зареєструвалися");

        return redirect(route('home'));
    }


    public function login(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {

        $request->validate([
            "email" => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email'=> $request->input('email'),
            'password' => $request->input('password')
        ])) {
            session()->flash('success', "Ви успішно увійшли");
            return redirect(route('home'));
        }
        return redirect()->back()->with('error',"Некоректні дані");
    }

    public function logout(): \Illuminate\Foundation\Application|Redirector|Application|RedirectResponse
    {
        Auth::logout();
        return redirect('/user/login');
    }

    public function delete($id,$user_id): \Illuminate\Foundation\Application|Redirector|Application|RedirectResponse
    {
        $car = Car::query()->where([
            'id' => $id,
            'user_id' => $user_id
            ])
            ->get();

        if ($car[0]->img && File::exists("storage/{$car[0]->img}")){

            File::delete("storage/{$car[0]->img}");
            Car::query()
                ->where([
                'id' => $id,
                'user_id' => $user_id
                ])
                ->delete();

            return redirect(route('user'))->with('success',"Успішно видалено");
        }

        return redirect(route('user'))->with('error',"Некоректні дані");
    }
}
