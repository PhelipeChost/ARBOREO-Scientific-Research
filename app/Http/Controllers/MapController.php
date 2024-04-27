<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function Map(): Renderable
    {
        $this->middleware('auth');
        return view('livewire.unesp-location');
    }
}
