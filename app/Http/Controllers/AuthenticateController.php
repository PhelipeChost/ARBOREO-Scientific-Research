<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class AuthenticateController extends Controller
{
    public function Authenticate(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('authenticate');
    }
}

