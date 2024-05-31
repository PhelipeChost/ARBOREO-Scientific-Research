@include('inventory.header')
<h1>Epítetos Cadastrados</h1>

<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Epíteto</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php

    require 'Assets/Inventory/vendor/autoload.php';

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;

    $client = new Client([
        'headers' => [ 'Content-Type' => 'application/json' ]
    ]);


    $url = 'http://localhost:8090/inventario/epitetos';

    $response = $client->request('GET', $url,[]);

    //echo "Status: " . $response->getStatusCode() . PHP_EOL;

    $data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    // print_r($data);
    // echo "===========================\n";

    foreach($data as $detalhes)
        ?>
    <tr>
        <th scope="row">{{ $detalhes->codepiteto }}</th>
        <td>{{ $detalhes->nomeepiteto }}</td>


        <td>
            <form action="{{ url('/home/inventory/list-epithet/edit-epithet')}}" method="GET">
                <input type="hidden" name="codepiteto" value="{{ $detalhes->codepiteto }}">
                <button title="Editar" type="submit" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                    </svg>
                </button>
            </form>
        </td>
        <td>
            <form action="{{ url('remove-epithet')}}" >
                <input type="hidden" name="codepiteto" value="{{ $detalhes->codepiteto }}" method="GET">
                <button title="Remover" type="submit" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                    </svg>
                </button>
            </form>
        </td>

    </tr>
    </tr>

    </tbody>
</table>
@include('inventory.baseboard')
