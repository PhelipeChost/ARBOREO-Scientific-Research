<?php

namespace App\Http\Controllers\Inventory\DeleteForms;

use App\Http\Controllers\Inventory\DeleteForms;
use Illuminate\Routing\Controller;

//rodapé
class RemoveproductsController extends Controller
{
    public function Removeproducts(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.DeleteForms.removeproducts');
    }
}
