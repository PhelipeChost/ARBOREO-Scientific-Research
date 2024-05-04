@include('inventory.header')
<?php
    $codigo = $_GET["codespecie"];
    
    require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/especies'.$codigo;
  
   $response = $client->delete('http://inventarioarboreo.feis.unesp.br:8090/inventario/especies/' . $codigo);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;

    if($response->getStatusCode()==200){
    return redirect()->to('list-species')->send();

  } else {
      echo $nome . ',não removido!';
  }

?>
@include('inventory.baseboard')