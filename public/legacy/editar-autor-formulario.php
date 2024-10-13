<?php include("cabecalho.php");
      
      $codautor = $_GET["codautor"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores/'.$codautor;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Autor</h1>


    <form action="altera-autor.php" method="GET">
    <input class="form-control" type="hidden" name="codautor" 
                value="<?php echo $data->codautor;?>"/>
        <table class="table">

            <tr>
                <td>Autor:</td>
                <td><input class="form-control" type="text"
                placeholder="Nome do Autor" name="nomeautor" 
                value="<?php echo $data->nomeautor;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>