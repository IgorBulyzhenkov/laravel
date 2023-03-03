<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index(Request $request): Application|Factory|View|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
  {
      if ($request->method() === 'POST'){
          $body = "<p><b>Ім'я</b> {$request->input('name')} </p>";
          $body .= "<p><b>E-mail</b> {$request->input('email')} </p>";
          $body .= "<p>Для того щоб підтвердити емейл перейдіть за посиланням
                        <button type='button'>
                            <a href='http://laravel/user/login'>Click</a>
                        </button>
                    </p>";

          Mail::to($request->input('email'))->send(new TestMail($body));
          $request->session()->flash('success', 'Лист надісланно!');
          return redirect('/send');
      }
      return view('send');
  }
}
