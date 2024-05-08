<?php

namespace App\Http\Controllers\Inventory\List;

use App\Http\Controllers\Inventory\List;
use Illuminate\Routing\Controller;

//Listar-species
class ListspeciesController extends Controller
{
    public function Listspecies(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.List.listspecies');
    }
}
