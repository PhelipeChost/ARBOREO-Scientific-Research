@include('inventory.header')
<?php
 
    $nomeautor = $_GET["nomeautor"];
    $codautor = $_GET["codautor"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores'.$codautor;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomeautor' => $nomeautor
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      header("Location: lista-autor.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">  Autor <?php echo $nomeautor; ?> não adicionado!
    </p>
<?php
  }

?>
@include('inventory.baseboard')
