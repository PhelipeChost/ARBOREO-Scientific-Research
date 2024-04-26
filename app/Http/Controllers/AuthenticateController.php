<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Feature;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function Authenticate(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('authenticate');
    }
}

