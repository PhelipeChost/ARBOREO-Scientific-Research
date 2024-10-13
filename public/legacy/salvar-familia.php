<?php
    require 'vendor/autoload.php';

    

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $nomefamilia = $_POST["nomefamilia"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/familias';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomefamilia' => $nomefamilia
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: planta-formulario.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>
<script>console.log('teste')</script>