<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory\ListForms;
use Illuminate\Routing\Controller;

//Listar-telefones
class ListphonesController extends Controller
{
    public function Listphones(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.List.listphones');
    }
}
