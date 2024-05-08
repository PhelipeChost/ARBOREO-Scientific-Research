<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

class InventoryController extends Controller
{
    public function Inventory(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.inventory');
    }
}
