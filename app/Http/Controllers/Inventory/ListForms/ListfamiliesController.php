<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory\ListForms;
use Illuminate\Routing\Controller;
Use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

//Listar-autores
class ListfamiliesController extends Controller
{
    public function Listfamilies()
    {
        return view('Inventory.List.listfamilies');
    }
}
