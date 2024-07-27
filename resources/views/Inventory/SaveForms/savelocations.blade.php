<?php
    require 'Assets/Inventory/vendor/autoload.php';
    
     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $local = $_POST["nomelocal"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/locais';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomelocal' => $local
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        return redirect()->to('/home/inventory/list-locations')->send();
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>