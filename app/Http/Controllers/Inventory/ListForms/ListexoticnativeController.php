<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory\ListForms;
use Illuminate\Routing\Controller;
Use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

//Listar-autores
class ListexoticnativeController extends Controller
{
    public function Listexoticnative(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.List.listexoticnative');
    }
}