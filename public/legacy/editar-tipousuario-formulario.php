<?php include("cabecalho.php");
      
      $codtipousuario = $_GET["codtipousuario"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/tipousuarios/'.$codtipousuario;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Tipo Usuário</h1>


    <form action="altera-tipousuario.php" method="GET">
    <input class="form-control" type="hidden" name="codtipousuario" 
                value="<?php echo $data->codtipousuario;?>"/>
        <table class="table">

            <tr>
                <td>Tipo Usuário:</td>
                <td><input class="form-control" type="text"
                placeholder="Tipo de Usuário" name="nometipousuario" 
                value="<?php echo $data->nometipousuario;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>