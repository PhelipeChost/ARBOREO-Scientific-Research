<?php include("cabecalho.php");
      
      $codnativaexotica = $_GET["codnativaexotica"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativasexoticas/'.$codepiteto;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Nativa/Exótica</h1>


    <form action="altera-nativaexotica.php" method="GET">
    <input class="form-control" type="hidden" name="codnativaexotica" 
                value="<?php echo $data->codnativaexotica;?>"/>
        <table class="table">

            <tr>
                <td>Nativa / Exótica:</td>
                <td><input class="form-control" type="text"
                placeholder="Nativa / Exótica" name="nomenativaexotica" 
                value="<?php echo $data->nomeepiteto;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>