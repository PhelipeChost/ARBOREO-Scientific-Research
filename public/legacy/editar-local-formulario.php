<?php include("cabecalho.php");
      
      $codlocal = $_GET["codlocal"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/locais/'.$codlocal;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Local</h1>


    <form action="altera-local.php" method="GET">
    <input class="form-control" type="hidden" name="codlocal" 
                value="<?php echo $data->codlocal;?>"/>
        <table class="table">

            <tr>
                <td>Local:</td>
                <td><input class="form-control" type="text"
                placeholder="Nome do Local" name="nomelocal" 
                value="<?php echo $data->nomelocal;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>