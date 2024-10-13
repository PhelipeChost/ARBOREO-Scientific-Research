
<?php
    
    include("cabecalho.php");
 
    $nomefamilia = $_GET["nomefamilia"];
    $codfamilia = $_GET["codfamilia"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/familias/'.$codgenero;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nomefamilia' => $nomefamilia
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      header("Location: lista-familia.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">   Família <?php echo $nome; ?> não adicionado!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>