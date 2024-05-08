<?php

namespace App\Http\Controllers\Inventory\List;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//Listar-telefones
class ListproductsController extends Controller
{
    public function Listproducts(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.List.listphones');
    }
}
