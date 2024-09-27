<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Exótica/Nativa</title>
</head>
<body>
    @include('Inventory.header')
        <?php
            $codnativaexotica = $_GET["codnativaexotica"];

            require 'Assets/Inventory/vendor/autoload.php';

        //implementar pra chamar a rota do login so spring boot
        use GuzzleHttp\Client;
            
        $client = new Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]);
        
        
        $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/nativasexoticas/'.$codnativaexotica;
        
        $response = $client->request('GET', $url,[]);
            
        //echo "Status: " . $response->getStatusCode() . PHP_EOL;
            
        $data = json_decode($response->getBody() );

        ?>
        <h1>Editar Nativa/Exótica</h1>


        <form action="{{ url('change-exoticnative') }}" method="GET">
        <input class="form-control" type="hidden" name="codnativaexotica" 
                    value=" {{ $data->codnativaexotica }} "/>
            <table class="table">

                <tr>
                    <td>Nativa / Exótica:</td>
                    <td><input class="form-control" type="text"
                    placeholder="Nativa / Exótica" name="nomenativaexotica" 
                    value="{{ $data->nomenativaexotica }}" required/></td>
                </tr>
            </table>
            
            <input  class="btn btn-outline-primary" type="submit" value="Alterar"/>
        </form>
    @include('Inventory.baseboard')
</body>
</html>
