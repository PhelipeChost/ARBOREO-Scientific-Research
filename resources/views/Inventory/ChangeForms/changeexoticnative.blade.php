@include('inventory.header')
<?php
    $nomenativaexotica = $_GET["nomenativaexotica"];
    $codnativaexotica = $_GET["codnativaexotica"];
    
    require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://localhost:8090/inventario/nativasexoticas/'.$codnativaexotica;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomenativaexotica' => $nomenativaexotica
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      return redirect()->to('/home/inventory/list-exoticnative')->send();

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">  Nativa ou Exótica <?php echo $nomenativaexotica; ?> não adicionado!
    </p>
<?php
  }

?>
@include('inventory.baseboard')