@include('Inventory.header')
<?php

    $nomegenero = $_GET["nomegenero"];
    $codgenero = $_GET["codgenero"];
    
    require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/generos/'.$codgenero;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomegenero' => $nomegenero
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      return redirect()->to('list-genres')->send();

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Gênero <?php echo $nome; ?> não adicionado!
    </p>
<?php
  }

?>
@include('Inventory.baseboard')