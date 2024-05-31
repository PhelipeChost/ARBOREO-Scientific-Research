<?php

namespace App\Http\Controllers\Inventory\ChangeForms;

use App\Http\Controllers\Inventory\ChangeForms;
use Illuminate\Routing\Controller;

//rodapé
class ChangefamiliesController extends Controller
{
    public function Changefamilies(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.ChangeForms.changefamilies');
    }
}
