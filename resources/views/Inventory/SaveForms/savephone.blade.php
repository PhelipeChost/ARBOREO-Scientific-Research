<?php
    require 'vendor/autoload.php';

    

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $telefone = $_POST["telefone"];

     $client = new Client();
    
   
    $url = 'http://localhost:8080/tccmake/telefones';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'numerotel' => $telefone
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-telefone.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>