<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function Index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('index');
    }
}
