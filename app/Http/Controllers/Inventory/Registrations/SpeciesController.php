<?php

namespace App\Http\Controllers\Inventory\Registrations;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//Telefones-formulário
class SpeciesController extends Controller
{
    public function Species(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.Registrations.species');
    }
}
