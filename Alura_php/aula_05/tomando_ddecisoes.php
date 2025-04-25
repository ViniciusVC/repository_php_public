<?php

$nomeFilme = $argv[2] ?? "Top Gun - Maverick";
$nomeFilme = $nomeFilme . " " . $argv[3] ?? " ";
$nomeFilme = $nomeFilme . " " . $argv[4] ?? " ";
$anoLancamento = $argv[1] ?? 2022; // Se o usuario não informar nada usará o 2022.

echo "--------------------------------\n";
echo "Nome do filme: " . $nomeFilme . "\n"; 
echo "Ano do filme: $anoLancamento\n"; 

if ($anoLancamento > 2022){
    echo "Este filme é um lançamento.\n";
}elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Este filme ainda é novo.\n";
}else{
    echo "Este filme não é um lançamento.\n";
}

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