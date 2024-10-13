<?php
    require 'vendor/autoload.php';

    

     //implementar pra chamar a rota do login so spring boot
     use GuzzleHttp\Client;
      
     $autor = $_POST["nomeautor"];

     $client = new Client();
    
   
    $url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/autores';
   
    
     $response = $client->request('POST', $url,[
        'body' => json_encode([
            'nomeautor' => $autor
        ]),
        'headers' => [
            'Content-Type' => 'application/json',
          ]
        
    ]);
    
      
     if($response->getStatusCode() == 200){
        ?>
        <script>
  swal.fire("Sucesso!","Autor cadastrado.","success")
</script>
<?php
        header("Location: lista-autor.php");
     }
      
     //$data = json_decode($response->getBody() );
    // echo "========= DADOS ===========\n";
    //print_r($response);
    // echo "===========================\n";
?>