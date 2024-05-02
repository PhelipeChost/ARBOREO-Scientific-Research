<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//rodapé
class BaseboardController extends Controller
{
    public function Baseboard(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.baseboard');
    }
}
