<?php
    require 'vendor/autoload.php';
 

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $nomenativaexotica = $_POST["nomenativaexotica"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativasexoticas';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomenativaexotica' => $nomenativaexotica
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-nativaexotica.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>