<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

class HeaderController extends Controller
{
    public function Header(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.header');
    }
}
