<?php

namespace App\Http\Controllers\Inventory\ListForms;

use App\Http\Controllers\Inventory\ListForms;
use Illuminate\Routing\Controller;
Use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

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
        try {
            // Faz a solicitação GET para a API
            $client = new Client();
            $response = $client->get('http://inventarioarboreo.feis.unesp.br:8090/inventario/autores');
            $data = json_decode($response->getBody(), true);

            // Decodifica a resposta JSON
            $data = json_decode($response->getBody());

            // Retorna a view com os dados
            return view('Inventory.List.listauthor', compact('data'));

        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }   
}