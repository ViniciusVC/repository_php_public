<?php

// capturar parametro ao chamar arquivo.
// c:> php manipular_array.php

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;


$notas = [];
echo "-For-1------------------------------\n";
for ($contador=1; $contador< $argc; $contador+=1) {
    $notas[] = (float) $argv[$contador];    
}


var_dump($notas); // Mostra o conteudo da variavel.

$somaDeNotas = 0;
echo "-For-2------------------------------\n";
for ($i=1; $i< count($notas); $i+=1) {
    $somaDeNotas += $notas[$i];    
}

echo "somaDeNotas=" . $somaDeNotas . "\n";



// $arqc Total de parametros em $arqv.

//$quantidadeDenotas = $argc - 1; // Ignorar o nome do arquivo
//$notaFilme = $somaDeNotas/$quantidadeDenotas;

