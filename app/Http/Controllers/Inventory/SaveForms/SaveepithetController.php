<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SaveepithetController extends Controller
{
    public function Saveepithet(Request $request)
    {
        $epiteto = $request->input('nomeepiteto');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomeepiteto' => $epiteto
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-epithet')->with('success', 'Epíteto adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o Epíteto.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }
}

