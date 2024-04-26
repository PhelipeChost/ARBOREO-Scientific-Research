<?php

namespace App\Http\Controllers;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    public function store(Request $request) {
        // Se a requisição for do tipo POST, significa que estamos adicionando uma nova marcação
        if ($request->isMethod('post')) {
            // Valide os dados do formulário para criar uma nova marcação
            $validatedData = $request->validate([
                'description' => 'required|string',
                'longitude' => 'required|numeric',
                'latitude' => 'required|numeric',
            ]);

            // Crie uma nova instância do modelo Feature com os dados validados
            $feature = new Feature();
            $feature->description = $validatedData['description'];
            $feature->longitude = $validatedData['longitude'];
            $feature->latitude = $validatedData['latitude'];

            // Salve a nova marcação no banco de dados
            $feature->save();

            // Redirecione o usuário para alguma página de sucesso, por exemplo
            return redirect()->route('features.store')->with('success', 'Marcação adicionada com sucesso!');
        }

        // Se a requisição não for do tipo POST, significa que estamos apenas recuperando todas as marcações
        // Recupere todas as marcações do banco de dados
        $features = Feature::all();

        // Inicialize um array para armazenar as marcações no formato GeoJSON
        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        // Itere sobre cada marcação e adicione ao GeoJSON
        foreach ($features as $feature) {
            $geojson['features'][] = [
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [$feature->longitude, $feature->latitude],
                ],
                'properties' => [
                    'description' => '<strong>' . $feature->description . '</strong>',
                ],
            ];
        }

        // Converta o array para JSON e retorne como resposta
        return response()->json($geojson);
    }
}

