@include('inventory.header')
<?php

    $numero = $_GET["numero"];
    $codtel = $_GET["codtel"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://localhost:8080/tccmake/telefones/'.$codtel;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'numerotel' => $numero
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      header("Location: lista-telefone.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Telefone <?php echo $nome; ?> não adicionado!
    </p>
<?php
  }

?>
@include('inventory.baseboard')