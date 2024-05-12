<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory\ListForms;
use Illuminate\Routing\Controller;
Use GuzzleHttp\Client;

//Listar-autores
class ListauthorController extends Controller
{
    public function Listauthor()
    {
        // Criação do cliente Guzzle
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        // URL da API que você deseja acessar
        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores';

        try {
            // Faz a solicitação GET para a API
            $response = $client->request('GET', $url);

            // Decodifica a resposta JSON
            $data = json_decode($response->getBody());

            // Retorna a view com os dados
            return view('Inventory.ListForms.listauthor', compact('data'));

        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json(['error' => $e->getMessage()], 500);
        }
}
}