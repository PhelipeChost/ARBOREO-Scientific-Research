<?php
    require 'vendor/autoload.php';
    
     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $epiteto = $_POST["nomeepiteto"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomeepiteto' => $epiteto
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-epiteto.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>