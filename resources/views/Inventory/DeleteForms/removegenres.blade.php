@include('Inventory.baseboard')
<?php
    $codigo = $_GET["codgenero"];
    
    require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores'.$codigo;
  
   $response = $client->delete('http://inventarioarboreo.feis.unesp.br:8090/inventario/generos/' . $codigo);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   if($response->getStatusCode()==200){
    return redirect()->to('home/inventory/list-genres')->send();

  } else {
      echo $nome . ',não removido!';
  }
  
?>
@include('Inventory.baseboard')