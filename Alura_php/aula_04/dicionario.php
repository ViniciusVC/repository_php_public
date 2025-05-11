<?php

// capturar parametro ao chamar arquivo.
// c:> php dicionario.php

// Array asociativo:
$filme = [
    "nome" => "Tor",
    "ano" => 2021,
    "nota" => 7.8,
    "categoria" => "super-heroi"
];

echo "--------------------------------\n";
echo " Nome do filme: " . $filme['nome']. "\n"; 
echo " ano: " . $filme['ano']. "\n"; 
echo " nota: " . $filme['nota']. "\n"; 
echo " categoria: " . $filme['categoria']. "\n"; 
echo "--------------------------------\n";

var_dump($filme); // Mostra o conteudo da variavel.

echo "--------------------------------\n";