<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function Menu(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.menu');
    }
}
