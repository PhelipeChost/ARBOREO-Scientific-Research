<?php
    require 'vendor/autoload.php';
    
     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $datacoleta = $_POST["datacoleta"];
     $email = $_POST["select-usuario"];
     $coord_s = $_POST["coordenada_s"];
     $coord_o = $_POST["coordenada_o"];
     $flor = $_POST["flor"];
     $fruto = $_POST["fruto"];
     $familia = $_POST["select-familia"];
     $genero = $_POST["select-genero"];
     $autor = $_POST["select-autor"];
     $especie = $_POST["select-especie"];
     $nativaexotica = $_POST["select-nativaexotica"];
     $local = $_POST["select-local"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/plantas';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'datacoleta' => $datacoleta,
            'nomefamilia' => $familia,
            'nomegenero' => $genero,
            'nomeautor' => $autor,
            'nomeespecie' => $especie,
            'coordenada_s' => $coord_s,
            'coordenada_o' => $coord_o,
            'nomenativaexotica' => $nativaexotica,
            'nomelocal' => $local,
            'email' => $email,
            'flor' => $flor,
            'fruto' => $fruto
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-plantas.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>