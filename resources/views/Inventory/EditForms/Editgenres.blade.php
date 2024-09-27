<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Gêneros</title>
</head>
<body>
    @include('Inventory.header')
        <?php
            $codgenero = $_GET["codgenero"];

            require 'Assets/Inventory/vendor/autoload.php';

        //implementar pra chamar a rota do login so spring boot
        use GuzzleHttp\Client;
            
        $client = new Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);
        
        
        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/generos/'.$codgenero;
        
        $response = $client->request('GET', $url,[]);
            
        //echo "Status: " . $response->getStatusCode() . PHP_EOL;
            
        $data = json_decode($response->getBody() );

        ?>
        <h1>Editar Gênero</h1>


        <form action="{{ url('change-genres')}}" method="GET">
        <input class="form-control" type="hidden" name="codgenero" 
                    value="<?php echo $data->codgenero;?>"/>
            <table class="table">

                <tr>
                    <td>Gênero:</td>
                    <td><input class="form-control" type="text"
                    placeholder="Gênero" name="nomegenero" 
                    value="<?php echo $data->nomegenero;?>" required/></td>
                </tr>
            </table>
            
            <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
        </form>
    @include('Inventory.baseboard')
</body>
</html>
