<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CreateController extends Controller
{
    public function Create()
    {
        return view('features.create');
    }

    public function store(Request $request)
    {
        // Preparar os dados a serem enviados para a API
        $data = [
            'datacoleta' => $request->input('datacoleta'),
            'coordenada_s' => $request->input('coordenada_s'),
            'coordenada_o' => $request->input('coordenada_o'),
            'flor' => $request->has('flor'),
            'fruto' => $request->has('fruto'),
            'familia' => [
                'nomefamilia' => $request->input('familia'),
            ],
            'genero' => [
                'nomegenero' => $request->input('genero'),
            ],
            'autor' => [
                'nomeautor' => $request->input('autor'),
            ],
            'especie' => [
                'nomeespecie' => $request->input('especie'),
            ],
            'nativaexotica' => [
                'nomenativaexotica' => $request->input('nativaexotica'),
            ],
            'local' => [
                'nomelocal' => $request->input('local'),
            ],
            'usuario' => [
                'email' => $request->input('email'), 
                'senha' => $request->input('senha'),
            ]
        ];

        \Log::info($data);

        // Fazer a requisição POST para a API
        $response = Http::post('http://inventarioarboreo.feis.unesp.br:8090/inventario/plantas', $data);

        // Verificar se a requisição foi bem-sucedida
        if ($response->successful()) {
            return redirect()->route('features.create')->with('success', 'Planta cadastrada com sucesso!');
        } else {
            return back()->withErrors(['msg' => 'Erro ao cadastrar a planta']);
        }
    }

    public function destroy($id)
    {
        // Fazer a requisição DELETE para a API
        $response = Http::delete("http://inventarioarboreo.feis.unesp.br:8090/inventario/plantas/{$id}");

        // Verificar se a requisição foi bem-sucedida
        if ($response->successful()) {
            return redirect()->route('features.create')->with('success', 'Planta excluída com sucesso!');
        } else {
            return back()->withErrors(['msg' => 'Erro ao excluir a planta']);
        }
    }
    
}