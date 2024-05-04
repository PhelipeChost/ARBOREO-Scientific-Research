<?php
    require 'Assets/Inventory/vendor/autoload.php';

    

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $especie = $_GET["nomeespecie"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/especies';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomeespecie' => $especie
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        return redirect()->to('list-species')->send();
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>