<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Feature;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function Registered(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('registered');
    }
}
