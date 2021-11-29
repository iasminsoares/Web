<?php

class Calculadora{

	//atributos
	private $total;
	private $numero1;
	private $numero2;

	function __construct(){

		//sempre que instanciar a classe, o construtor irá zerar os atributos
		$this->total   = 0;
		$this->numero1 = 0;
		$this->numero2 = 0;
	}

	//getters e setters

	public function setNumero1($parametro_numero1){
		$this->numero1 = $parametro_numero1;

	}

	public function setNumero2($parametro_numero2){
		$this->numero2 = $parametro_numero2;

	}

	//MÉTODOS DE OPERAÇÕES

	public function somar(){
		$this->total = $this->numero1 + $this->numero2;
	}

	public function subtrair(){
		$this->total = $this->numero1 - $this->numero2;
	}

	public function multiplicar(){
		$this->total = $this->numero1 * $this->numero2;
	}

	public function dividir(){
		$this->total = $this->numero1 / $this->numero2;
	}

	public function getTotal(){
		//retornar o valor da soma.
		return $this->total;
	}

	


}

?>