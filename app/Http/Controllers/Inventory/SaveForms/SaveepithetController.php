<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;

//rodapé
class SaveepithetController extends Controller
{
    public function Saveepithet(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.SaveForms.saveepithet');
    }
}
