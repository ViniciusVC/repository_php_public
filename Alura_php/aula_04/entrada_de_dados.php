<?php

// capturar parametro ao chamar arquivo.
// c:> php entrada_de_dados var1 var2 var3

echo "Bem-vindo(a) ao \n scren match!\n"; 

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; // Se o usuario não informar nada usará o 2022.



// Concatenando string com variaveis
echo "--------------------------------";
echo "\n Nome do filme: " . $nomeFilme. "\n"; 
echo "\n ano do filme: $anoLancamento. \n"; 
echo "--------------------------------\n";


// Operadores de comparação no PHP:
// == (igual a)
// === (idêntico a)
// != (diferente de)
// <> (diferente de)
// !== (não idêntico a)
// > (maior que)
// >= (maior ou igual a)
// < (menor que)
// <= (menor ou igual a)