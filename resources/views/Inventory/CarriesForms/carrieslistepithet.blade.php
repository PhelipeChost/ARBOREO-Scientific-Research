<?php
//implementar pra chamar a rota do login so spring boot
use GuzzleHttp\Client;
function carregaCombos($url){


require 'Assets/Inventory/vendor/autoload.php';



$client = new Client([
    'headers' => ['Content-Type' => 'application/json']
]);


$url = 'http://inventarioarboreo.feis.unesp.br:8090/inventario/epitetos';

$response = $client->request('GET', $url, []);

//echo "Status: " . $response->getStatusCode() . PHP_EOL;

$data = json_decode($response->getBody());
// echo "========= DADOS ===========\n";
// print_r($data);
// echo "===========================\n";

return $data;
}
?>