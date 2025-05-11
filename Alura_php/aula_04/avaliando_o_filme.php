<?php

// capturar parametro ao chamar arquivo.
// c:> php avaliando_o_filme.php 20 10 20

echo "Bem-vindo(a) ao \n scren match!\n"; 

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 0;

//$somaDeNotas += $argv[1]; 
//$somaDeNotas += $argv[2]; 
//$somaDeNotas += $argv[3]; 

for ($contador=1; $contador< $argc; $contador+=1) {
    $somaDeNotas += $argv[$contador];    
}

// $arqc Total de parametros em $arqv.

$quantidadeDenotas = $argc - 1; // Ignorar o nome do arquivo

$notaFilme = $somaDeNotas/$quantidadeDenotas;

// O $argv[0] é nome do arquivo.

// Concatenando string com variaveis
echo "--------------------------------";
echo "\n Nome do filme: " . $nomeFilme. "\n"; 
echo "\n ano do filme: $anoLancamento. \n"; 
echo "\n Nota do filme: $notaFilme. \n"; 
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