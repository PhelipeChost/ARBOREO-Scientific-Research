@include('inventory.header')
<?php
    require 'Assets/Inventory/vendor/autoload.php';
    
     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $epiteto = $_GET["nomeepiteto"];

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
        return redirect()->to('/home/inventory/list-epithet')->send();
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>
@include('inventory.baseboard')