<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Espécies</title>
</head>
<body>
    @include('Inventory.header')
    <?php
        $codespecie = $_GET["codespecie"];

        require 'Assets/Inventory/vendor/autoload.php';

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


        <form action="{{ url('change-species')}}" method="GET">
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
    @include('Inventory.baseboard')
</body>
</html>
