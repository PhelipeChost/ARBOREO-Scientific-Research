<?php

namespace App\Http\Controllers\Inventory\Registrations;

use App\Http\Controllers\Inventory;
use Illuminate\Routing\Controller;

//Autor-formulário
class EpithetController extends Controller
{
    public function Epithet(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.Registrations.epithet');
    }
}
