
<?php
    
    include("cabecalho.php");
 
    $nometipousuario = $_GET["nometipousuario"];
    $codtipousuario = $_GET["codtipousuario"];
    
    require 'vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
     
    $client = new Client([
       'headers' => [ 'Content-Type' => 'application/json' ]
   ]);
   
  
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/tipousuarios/'.$codtipousuario;
   
    $response = $client->request('PUT', $url,[
      'body' => json_encode([
          'nometipousuario' => $nometipousuario
      ]),
      'headers' => [
          'Content-Type' => 'application/json',
        ]
      
  ]);
     
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
     
    if($response->getStatusCode() ==  200){
      header("Location: lista-tipousuario.php");

    ?>
    
  <?php
  } else { ?>
    <p class="alert text-danger">  Autor <?php echo $nomeautor; ?> não adicionado!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>