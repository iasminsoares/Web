<?php

class Pessoa {
	private $nome; //atributo

	public function correr(){ 
		echo $this->nome . " correndo <br>";
	}

	function __construct($parametro_nome){ //método
		//Construtor pode ser usado para configurar informações iniciais do projeto
		echo "Construtor Iniciado <br>";
		$this->nome = $parametro_nome;
		//echo $this->nome;
	}

	function __destruct(){
		//é chamado sempre q o objeto for removido da memória
		echo "Objeto removido";
	}
}

$pessoa = new Pessoa('Iasmin');
$pessoa->correr();
?>