
<?php
    
    include("cabecalho.php");
 
    $nomeespecie = $_GET["nomeespecie"];
    $codespecie = $_GET["codespecie"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/especies/'.$codespecie;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomeespecie' => $nomeespecie
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      header("Location: lista-especie.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger"> Espécie <?php echo $nome; ?> não adicionado!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>