<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SavefamiliesController extends Controller
{
    public function Savefamilies(Request $request)
    {
        $familias = $request->input('nomefamilia');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/familias';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomefamilia' => $familias
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-families')->with('success', 'Família adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o Família.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }
}
