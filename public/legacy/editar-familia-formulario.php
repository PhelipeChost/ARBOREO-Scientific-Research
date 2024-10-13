<?php include("cabecalho.php");
      
      $codfamilia = $_GET["codfamilia"];

      require 'vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/familias/'.$codfamilia;
  
   $response = $client->request('GET', $url,[]);
    
   //echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Família</h1>


    <form action="altera-familia.php" method="GET">
    <input class="form-control" type="hidden" name="codfamilia" 
                value="<?php echo $data->codfamilia;?>"/>
        <table class="table">

            <tr>
                <td>Família:</td>
                <td><input class="form-control" type="text"
                placeholder="Nome Família" name="nomefamilia" 
                value="<?php echo $data->nomefamilia;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
<?php include("rodape.php");?>