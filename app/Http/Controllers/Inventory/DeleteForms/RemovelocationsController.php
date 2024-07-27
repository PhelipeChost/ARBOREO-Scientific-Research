<?php

namespace App\Http\Controllers\Inventory\DeleteForms;

use App\Http\Controllers\Inventory\DeleteForms;
use Illuminate\Routing\Controller;

//rodapé
class RemovelocationsController extends Controller
{
    public function Removelocations(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.DeleteForms.removelocations');
    }
}
