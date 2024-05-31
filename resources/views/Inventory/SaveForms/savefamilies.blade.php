<?php
    require 'Assets/Inventory/vendor/autoload.php';

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;

     $nomefamilia = $_GET["nomefamilia"];

     $client = new Client();


    $url = 'http://localhost:8090/inventario/familias';


     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomefamilia' => $nomefamilia
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]

    ]);


     if($response->getStatusCode() == 200){
         return redirect()->to('/home/inventory/list-families')->send();
     }

     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>
