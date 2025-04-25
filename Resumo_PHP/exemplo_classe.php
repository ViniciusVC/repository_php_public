
<?php
class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;

    // Método construtor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para exibir informações do carro
    public function exibirInformacoes() {
        return "-------------------\n| Marca: " . $this->marca . "\n| Modelo: " . $this->modelo . "\n| Ano: " . $this->ano . "\n-------------------\n";
    }
}

// Criando uma instância da classe Carro
$Carro1 = new Carro("Toyota", "Corolla", 2020);
$Carro2 = new Carro("WV", "Fusca", 1980);

// Exibindo informações do carro
echo $Carro1->exibirInformacoes();
echo $Carro2->exibirInformacoes();
?>
