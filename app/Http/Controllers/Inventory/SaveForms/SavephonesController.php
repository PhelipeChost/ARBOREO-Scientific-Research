<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;

//rodapé
class SavephonesController extends Controller
{
    public function Savephones(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.saveforms.savephones');
    }
}