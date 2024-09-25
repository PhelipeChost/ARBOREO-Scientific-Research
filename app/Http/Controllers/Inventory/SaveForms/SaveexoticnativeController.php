<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SaveexoticnativeController extends Controller
{
    public function Saveexoticnative(Request $request)
    {
        $exoticanativa = $request->input('nomenativaexotica');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativasexoticas';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomenativaexotica' => $exoticanativa
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-exoticnative')->with('success', 'Exotica/Nativa adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o Exotica/Nativa.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }
}
