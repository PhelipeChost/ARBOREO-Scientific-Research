
<?php
    
    include("cabecalho.php");
 
    $nomenativaexotica = $_GET["nomenativaexotica"];
    $codnativaexotica = $_GET["codnativaexotica"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativaexoticas/'.$codnativaexotica;
   
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
      header("Location: lista-nativaexotica.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">  Nativa ou Exótica <?php echo $nomenativaexotica; ?> não adicionado!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>