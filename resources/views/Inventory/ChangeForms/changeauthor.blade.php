@include('Inventory.header')
<?php
 
    $nomeautor = $_GET["nomeautor"];
    $codautor = $_GET["codautor"];
    
    require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores/'.$codautor;
   
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
      return redirect()->to('list-author')->send();

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">  Autor <?php echo $nomeautor; ?> não adicionado!
    </p>
<?php
  }

?>
@include('Inventory.baseboard')
