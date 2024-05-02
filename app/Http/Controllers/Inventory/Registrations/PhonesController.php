<?php

namespace App\Http\Controllers\Inventory\Registrations;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//Telefones-formulário
class PhonesController extends Controller
{
    public function Phones(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.registrations.phones');
    }
}
