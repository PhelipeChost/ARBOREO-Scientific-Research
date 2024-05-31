@include('inventory.header')
<?php

    $codigo = $_GET["codfamilia"];

    require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;

   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);


   $url = 'http://localhost:8090/inventario/familias/'.$codigo;

   $response = $client->request('DELETE', $url,[]);

   //echo "Status: " . $response->getStatusCode() . PHP_EOL;

    if($response->getStatusCode()==200){
        return redirect()->to('home/inventory/list-families')->send();

    } else {
        echo $nome . ',não removido!';
    }

?>
@include('inventory.baseboard')
