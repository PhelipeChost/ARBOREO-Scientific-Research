<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SavespeciesController extends Controller
{
    public function Savespecies(Request $request)
    {
        $especies = $request->input('nomeespecie');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/especies';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomeespecie' => $especies
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-species')->with('success', 'Espécie adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o Espécies.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }
}
