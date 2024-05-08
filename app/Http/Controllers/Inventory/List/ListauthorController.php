<?php

namespace App\Http\Controllers\Inventory\List;

use App\Http\Controllers\Inventory\List;
use Illuminate\Routing\Controller;

//Listar-autores
class ListauthorController extends Controller
{
    public function Listauthor(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.list.listauthor');
    }
}
