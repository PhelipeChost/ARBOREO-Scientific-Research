<?php
    
    include("cabecalho.php");

    $codigo = $_GET["codnativaexotica"];
    
    require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativasexoticas/'.$codigo;
  
   $response = $client->request('DELETE', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   if($response->getStatusCode()==200){
    header("Location: lista-nativaexotica.php");  

    ?>

  <?php
  } else { ?>
    <p class="alert text-danger">   Epiteto <?php echo $nome; ?>,não removido!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>