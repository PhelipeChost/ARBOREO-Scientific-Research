<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SavegenresController extends Controller
{
    public function Savegenres(Request $request)
    {

        $genero = $request->input('nomegenero');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/generos';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomegenero' => $genero
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-genres')->with('success', 'Gênero adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o Gênero.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }
    }
