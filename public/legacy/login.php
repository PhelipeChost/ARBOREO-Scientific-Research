<?php
    require 'vendor/autoload.php';
    $email = $_POST["email"];
    $senha = $_POST["password"];

    //implementar pra chamar a rota do login so spring boot
    use GuzzleHttp\Client;
 
    $client = new Client();
 
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/usuarios';
    $response = $client->request('GET', $url,[
        'body' => json_encode([
            'email' => $email,
            'senha' => $senha
        ]),
        'headers' => [
            'Content-Type' => 'application/json'
          ]
        
    ]);
 
//echo "Status: " . $response->getStatusCode() . PHP_EOL;
 
$data = json_decode($response->getBody());


//print_r($data)
//print $data[1]->titulo;

    if(count((array)$data) > 0){
        header("Location: principal.php"); 
        exit(); 
    }
    else{
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo " <body>
            <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Usuário não encontrado'
                    }).then(function() {
                        window.location = 'index.php';
                    });
                  </script>
                  </body>";
        //header("Location: index.php");  
  }

?>