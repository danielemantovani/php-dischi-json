<?php

// prendo il file da leggere
$list_string = file_get_contents("dischi.json"); //string

// trasformo la stringa letta in array associativo per una migliore gestione dei dati
$list_array = json_decode($list_string, true); //array

// creo i dati della risposta
$response_data=[
    "results" => $list_array
];

// converte l'array in stringa json
$json_list = json_encode($response_data);

// informo il browser che gli arriverà un file di tipo json
header("Content-Type: application/json");

// invio la risposta convertendo l'array in una stringa JSON
echo $json_list;


