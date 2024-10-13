<?php
    require 'vendor/autoload.php';

    

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $genero = $_POST["nomegenero"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/generos';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomegenero' => $genero
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-genero.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>