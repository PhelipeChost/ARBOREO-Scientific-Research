<?php include("cabecalho.php");
      
      $codespecie = $_GET["codespecie"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/especies/'.$codespecie;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Espécies</h1>


    <form action="altera-especie.php" method="GET">
    <input class="form-control" type="hidden" name="codespecie" 
                value="<?php echo $data->codespecie;?>"/>
        <table class="table">

            <tr>
                <td>Espécie:</td>
                <td><input class="form-control" type="text"
                placeholder="Espécie" name="nomeespecie" 
                value="<?php echo $data->nomeespecie;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>