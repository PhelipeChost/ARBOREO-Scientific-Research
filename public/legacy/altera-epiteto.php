
<?php
    
    include("cabecalho.php");
 
    $nomeepiteto = $_GET["nomeepiteto"];
    $codepiteto = $_GET["codepiteto"];
    
    require 'vendor/autoload.php';

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
      header("Location: lista-epiteto.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Epíteto <?php echo $nomeepiteto; ?> não adicionado!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>