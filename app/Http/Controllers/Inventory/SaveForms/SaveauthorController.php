<?php

namespace App\Http\Controllers\Inventory\SaveForms;

use App\Http\Controllers\Inventory\SaveForms;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;

//rodapé
class SaveauthorController extends Controller
{
    public function Saveauthor(Request $request)
    {
        $autor = $request->input('nomeautor');

        $client = new Client();

        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores';

        try {
            $response = $client->request('POST', $url, [
                'body' => json_encode([
                    'nomeautor' => $autor
                ]),
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return Redirect::to('home/inventory/list-author')->with('success', 'Autor adicionado com sucesso!');
            } else {
                return back()->with('error', 'Erro ao adicionar o autor.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
        }
    }

}
