<?php

// Nota : Exemplificar o problemas com numeros decimais (01 + 02).

// Use o \n para quebrar a linha.
echo "Bem-vindo(a) ao \n scren match!\n"; 

$nomeFilme = "Top Gun - Maverick";
echo $nomeFilme;

// Concatenando string com variaveis
echo "--------------------------------";
echo "\n Nome do filme: " . $nomeFilme. "\n"; 
echo "\n Nome do filme: $nomeFilme. \n"; 
echo "--------------------------------\n";

// Aspas simples não são concatenados nem interpletão o /n.
echo '\n Nome do filme: ' . $nomeFilme. '\n'; 
echo '\n Nome do filme: $nomeFilme. \n'; 
echo '--------------------------------';

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