@include('inventory.header')
<?php

    $codigo = $_GET["codepiteto"];

    require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;

   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);


   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos/'.$codigo;

   $response = $client->request('DELETE', $url,[]);

   //echo "Status: " . $response->getStatusCode() . PHP_EOL;

    if($response->getStatusCode()==200){
        return redirect()->to('home/inventory/list-epithet')->send();

    } else {
        echo $nome . ',não removido!';
    }

?>
@include('inventory.baseboard')
