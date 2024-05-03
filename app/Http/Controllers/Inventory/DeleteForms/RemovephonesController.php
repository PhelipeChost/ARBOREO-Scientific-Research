<?php

namespace App\Http\Controllers\Inventory\DeleteForms;

use App\Http\Controllers\Inventory\DeleteForms;
use Illuminate\Routing\Controller;

//rodapé
class RemovephonesController extends Controller
{
    public function Removephones(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.deleforms.removephones');
    }
}
