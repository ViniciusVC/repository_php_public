<?php

// capturar parametro ao chamar arquivo.
// c:> php arrays.php

var_dump($argv); // Mostra o conteudo da variavel.

echo "--------------------------------\n";

$exemploArray1 = [
    10,
    9,
    7.5,
    5,
    6.8,
];

$exemploArray2 = array(
    10,
    9,
    7.5,
    5,
    6.8,
);

echo "-For-------------------------------\n";
for ($contador=0; $contador< 4; $contador+=1) {
    echo " exemploArray1: " . $exemploArray1[$contador]. "\n"; 
    echo " exemploArray2: " . $exemploArray2[$contador]. "\n"; 
}
echo "--------------------------------\n";

$filme = [
    "Tor",
    2021,
    7.8,
    "super-heroi"
];

echo " Nome do filme: " . $filme[0]. "\n"; 
echo " ano: " . $filme[1]. "\n"; 
echo " nota: " . $filme[2]. "\n"; 
echo " categoria: " . $filme[3]. "\n"; 
