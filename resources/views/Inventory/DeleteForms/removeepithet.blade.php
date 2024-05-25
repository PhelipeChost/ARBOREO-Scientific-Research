@include('inventory.header')
<?php

    $codigo = $_GET["codepiteto"];
    
    require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://localhost:8090/inventario/epitetos/'.$codigo;
  
   $response = $client->request('DELETE', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   if($response->getStatusCode()==200){
    return redirect()->to('/home/inventory/list-epithet')->send();

    ?>

  <?php
  } else { ?>
    <p class="alert text-danger">   Epiteto <?php echo $nome; ?>,não removido!
    </p>
<?php
  }

?>
@include('inventory.baseboard')