<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//Listar-generos
class ListgenresController extends Controller
{
    public function Listgenres(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.List.listgenres');
    }
}
