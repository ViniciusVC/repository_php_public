<?php

// Variavel --------------
$nome ='Vinicius';
$idade = 40;

// Condiional --------------
if( $idade==40 ){
	// Concatenação é com ponto.
	echo "O meu nome é ".$nome;
}else{
	echo 'Falso';
}
	
if( $idade!==26 ){
	echo "Falso";
	// quebra de linha.
	echo "<br>\n"; 
}
	
// Loop --------------
$i = 0;
while($i<0){
	echo $i;
	echo "<br>\n";
	$i++;
}
	
// Funções --------------
function printNumero($n){
	echo $n;
}

printNumero(30);
echo "<br>\n";
// Quebra de linha.
printNumero(50);
	
// Uma classe no PHP --------------
class Pessoa{
		public $nome;
		public $idade;
		
		// Método construtor
		public function _construct($nome, $idade){
			$this->nome = $nome;
			$this->idade = $idade;			
		}

		// Método para imprimir nome e idade
		public function printNomeEIdade(){
			echo $this->nome;
			echo "<br>\n";
			echo $this->idade;
		}
}
	
	
// Criando instâncias da classe Pessoa
$pessoa = new Pessoa('Vinicius','26');
$pessoa -> printNomeEIdade();
echo "<br>\n";
$pessoa2 = new Pessoa('Vinicius','26');
$pessoa2 -> printNomeEIdade();
	
// Usando arrays em PHP
$arr = ['bla1','bla2','bla3'];
echo $arr[0];
echo $arr[1];
echo $arr[2];
	
?>