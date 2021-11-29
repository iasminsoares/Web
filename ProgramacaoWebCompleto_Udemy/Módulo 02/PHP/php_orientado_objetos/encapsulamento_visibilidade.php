<?php
class Veiculo{
/*
Os atributos eles permitem q podemos definir oq será seguro pro usuário visualizar e oq poderá alterar
- public - pode ser alterado fora da classe
- private - não pode ser alterado fora da classe
- protected - não pode ser alterado fora da classe, porém pode ser alterado nas classes filha ou subclasse
*/

	private $placa;
	private $cor;
	protected $tipo='Caminhonete';

	public function setPlaca($parametro_placa){ 
	//método pra configurar o atributo placa
	//encapsulando o atributo placa, utilizando um método q recebe um parametro placa p/ configurar o valor de paramentro placa na placa da classe.
		$this->placa = $parametro_placa;
	}

	public function getPlaca(){ 
		//método pra exibir o atributo placa.
		return $this->placa;
	}

}

class Carro extends Veiculo{
	public function exibirTipo(){
		echo $this->tipo;	
	}
}

$carro = new Carro();
$carro->exibirTipo();

/* NÃO QUER EXIBIR
$veiculo = new Veiculo();
$veiculo->setPlaca = ('JAM2636');
echo $veiculo->getPlaca();
*/


/*
dá um fatal error pois tentamos acessar fora da classe.
$veiculo = new Veiculo();
$veiculo->cor = 'azul';
echo $veiculo->cor;
*/


/*dá um fatal error pois tentamos acessar fora da classe.
$veiculo = new Veiculo();
$veiculo->tipo = 'Palio';
echo $veiculo->tipo;
*/


?>