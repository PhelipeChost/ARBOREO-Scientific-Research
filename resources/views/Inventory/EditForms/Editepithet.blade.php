<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Epíteto</title>
</head>
<body>
    @include('Inventory.header')
    <?php
        
        $codepiteto = $_GET["codepiteto"];

        require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
        
    $client = new Client([
        'headers' => [ 'Content-Type' => 'application/json' ]
    ]);
    
    
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos/'.$codepiteto;
    
    $response = $client->request('GET', $url,[]);
        
    //echo "Status: " . $response->getStatusCode() . PHP_EOL;
        
    $data = json_decode($response->getBody() );

    ?>
    <h1>Editar Epítetos</h1>


        <form action="{{ url('change-epithet')}}" method="GET">
        <input class="form-control" type="hidden" name="codepiteto" 
                    value="<?php echo $data->codepiteto;?>"/>
            <table class="table">

                <tr>
                    <td>Epíteto:</td>
                    <td><input class="form-control" type="text"
                    placeholder="Epíteto" name="nomeepiteto" 
                    value="<?php echo $data->nomeepiteto;?>" required/></td>
                </tr>
            </table>
            
            <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
        </form>
    @include('Inventory.baseboard')
</body>
</html>

