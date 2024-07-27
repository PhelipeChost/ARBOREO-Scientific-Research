@include('inventory.header')
<?php
 
    $nomeepiteto = $_GET["nomeepiteto"];
    $codepiteto = $_GET["codepiteto"];
    
    require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos/'.$codepiteto;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomeepiteto' => $nomeepiteto
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      return redirect()->to('/home/inventory/list-epithet')->send();

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Epíteto <?php echo $nomeepiteto; ?> não adicionado!
    </p>
<?php
  }

?>
@include('inventory.baseboard')
