<?php

namespace App\Http\Controllers\Inventory\EditForms;

use App\Http\Controllers\Inventory\EditForms;
use Illuminate\Routing\Controller;

//rodapé
class EditgenresController extends Controller
{
    public function Editgenres(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.EditForms.Editgenres');
    }
}
