<?php

// capturar parametro ao chamar arquivo.
// c:> php manipular_array.php

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;


$notas = [];
echo "-For-------------------------------\n";
for ($contador=1; $contador< $argc; $contador+=1) {
    $notas[] = (float) $argv[$contador];    
}

var_dump($notas); // Mostra o conteudo da variavel.

$somaDeNotas = 0;
echo "-Foreach-----------------------------\n";
foreach ($notas as $nota){
    echo "nota=" . $nota . "\n";    
    $somaDeNotas += $nota;    
}

echo "somaDeNotas=" . $somaDeNotas . "\n";



// $arqc Total de parametros em $arqv.

//$quantidadeDenotas = $argc - 1; // Ignorar o nome do arquivo
//$notaFilme = $somaDeNotas/$quantidadeDenotas;

