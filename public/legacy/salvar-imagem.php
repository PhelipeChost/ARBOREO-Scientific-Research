<?php
    require 'vendor/autoload.php';
    
     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $imageFile = $_FILES['file'];
     $imagePath = $imageFile['tmp_name'];
     $imageName = $imageFile['name'];

     // Obter os dados do formulário
     $dataimagem = $_POST['dataimagem'];
     $descricao = $_POST['descricao'];
     $codigoplanta = $_POST['codigoPlanta'];

     // Criar um array de dados JSON
     $jsonData = json_encode([
         'dataimagem' => $dataimagem,
         'descricao' => $descricao,
         'codplanta' => $codigoplanta
     ]);


     $client = new Client(['verify' => false]);
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/imagens';
   
    
     $response = $client->request('POST', $url,[
        'multipart' => [
                    [
                        'name' => 'file',
                        'contents' => fopen($imagePath, 'r'),
                        'filename' => $imageName
                    ],
                    [
                        'name' => 'imagem',
                        'contents' => $jsonData,
                        'headers' => ['Content-Type' => 'application/json']
                    ]
                ]
            ]);
    
      
     if($response->getStatusCode() == 200){
        header("Location: lista-plantas.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>