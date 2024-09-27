<?php

namespace App\Http\Controllers\Inventory\EditForms;

use App\Http\Controllers\Inventory\EditForms;
use Illuminate\Routing\Controller;

//rodapé
class EditfamiliesController extends Controller
{
    public function Editfamilies(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Inventory.EditForms.Editfamilies');
    }
}
