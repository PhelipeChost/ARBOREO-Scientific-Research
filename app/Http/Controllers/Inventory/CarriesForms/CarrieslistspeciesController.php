<?php

namespace App\Http\Controllers\Inventory\CarriesForms;

use App\Http\Controllers\Inventory\CarriesForms;
use Illuminate\Routing\Controller;

//rodapé
class CarrieslistspeciesController extends Controller
{
    public function Carrieslistspecies(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.CarriesForms.carrieslistspecies');
    }
}
