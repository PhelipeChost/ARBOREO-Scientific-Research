<?php
    
    include("cabecalho.php");

    $codigo = $_GET["codtel"];
    
    require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/telefones/'.$codigo;
  
   $response = $client->request('DELETE', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   if($response->getStatusCode()==200){
    header("Location: lista-telefone.php");  

    ?>

  <?php
  } else { ?>
    <p class="alert text-danger">   Telefone <?php echo $nome; ?>,não removido!
    </p>
<?php
  }

?>

   

<?php include("rodape.php"); ?>