@include('inventory.header')
<?php
      $codtel = $_GET["codtel"];

      require 'Assets/Inventory/vendor/autoload.php';

   //implementar pra chamar a rota do login so spring boot
   use GuzzleHttp\Client;
    
   $client = new Client([
      'headers' => [ 'Content-Type' => 'application/json' ]
  ]);
  
 
   $url = 'http://localhost:8080/tccmake/telefones/'.$codtel;
  
   $response = $client->request('GET', $url,[]);
    
   // echo "Status: " . $response->getStatusCode() . PHP_EOL;
    
   $data = json_decode($response->getBody() );

?>
<h1>Editar Telefone</h1>


    <form action="altera-telefone.php" method="GET">
    <input class="form-control" type="hidden" name="codtel" 
                value="<?php echo $data->codtel;?>"/>
        <table class="table">

            <tr>
                <td>Número Telefone:</td>
                <td><input class="form-control" type="text"
                placeholder="Telefone" name="numero" 
                value="<?php echo $data->numerotel;?>" required/></td>
            </tr>
        </table>
        
        <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
    </form>
@include('inventory.baseboard')