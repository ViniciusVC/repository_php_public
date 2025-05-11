<?php

// capturar parametro ao chamar arquivo.
// c:> php manipular_array.php

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$somaDeNotas = 0;

$notas = [];
echo "-For-1------------------------------\n";
for ($contador=1; $contador< $argc; $contador+=1) {
    echo " contador: " . $contador. "\n"; 
    $notas[$contador-1] = (float) $argv[$contador];    
}
echo "--------------------------------\n";

var_dump($notas); // Mostra o conteudo da variavel.

$notasX = [];
echo "-For-2------------------------------\n";
for ($contador=1; $contador< $argc; $contador+=1) {
    echo " contador: " . $contador. "\n"; 
    $notasX[] = (float) $argv[$contador]; // Como o array esta vazio não precisa incluir a posição.   
}
echo "--------------------------------\n";
var_dump($notasX); // Mostra o conteudo da variavel.

// $arqc Total de parametros em $arqv.

//$quantidadeDenotas = $argc - 1; // Ignorar o nome do arquivo
//$notaFilme = $somaDeNotas/$quantidadeDenotas;

