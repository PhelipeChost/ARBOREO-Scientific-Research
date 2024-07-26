<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class AuthenticateController extends Controller
{
    public function Authenticate()
    {
        return view('authenticate');
    }

    public function authenticateUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string|min:3',
        ]);

        $response = Http::get('http://localhost:8090/inventario/usuarios');

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to connect to the API'], 500);
        }

        $usuarios = $response->json();

        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $request->input('email') && $usuario['senha'] === $request->input('senha') && $usuario['ativo']) {
                // Armazena o usuário na sessão e redireciona para a página inicial
                return redirect()->route('home')->with('user', $usuario);
            }
        }

        // Adiciona um erro de validação
        return redirect()->back()->withErrors(['email' => 'Essas credenciais não são reais'])->withInput();
    }




    public function endSession(Request $request)
    {
        // Remove o usuário da sessão
        $request->session()->flush();

        // Redireciona para a página de autenticação
        return redirect()->route('authenticate')->with('message', 'Você foi deslogado com sucesso.');
    }


    public function checkAccountStatus(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $response = Http::get('http://localhost:8090/inventario/usuarios');

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to connect to the API'], 500);
        }

        $usuarios = $response->json();

        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $request->input('email')) {
                // Retorna o status da conta
                return response()->json([
                    'email' => $usuario['email'],
                    'ativo' => $usuario['ativo'],
                    'tipousuario' => $usuario['tipousuario']['nometipousuario']
                ]);
            }
        }

        return response()->json(['error' => 'Account not found'], 404);
        
    }
}