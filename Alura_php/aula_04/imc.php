<?php

// capturar parametro ao chamar arquivo.
// c:> php imc.php


$altura = 1.73;
$peso = 65;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Excesso de peso";
} else {
    echo "Obesidade";
}