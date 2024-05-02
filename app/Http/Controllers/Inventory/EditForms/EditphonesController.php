<?php

namespace App\Http\Controllers\Inventory\EditForms;

use App\Http\Controllers\Inventory\EditForms;
use Illuminate\Routing\Controller;

//rodapé
class EditphonesController extends Controller
{
    public function Editphones(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.editforms.editphones');
    }
}
