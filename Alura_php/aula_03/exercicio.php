<?php

$saudacao = "Olá, meu nome é ";
$nome = "Alice ";
$continuacao = "e minha idade é ";
$idade = 17;
echo "$saudacao . $nome . $continuacao" . $idade;

// O código de Alice possui algum problema?
// Sim, pois o operador de concatenação está dentro da string, ou seja, será exibido.
// A mensagem que será exibida ao executar esse código é Olá, meu nome é . Alice . e minha idade é 17. A concatenação entre a variável $idade e o restante funcionará, pois essa variável está fora da string.