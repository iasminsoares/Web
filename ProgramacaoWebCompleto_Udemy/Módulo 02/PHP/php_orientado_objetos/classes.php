<?php

class Pessoa{
	//Atributos
	var $nome;


	//Métodos
	function setNome($nome_definido){
		//this-> é utilizado pra acessar um atributo ou método dentro de uma classe.
		$this->nome = $nome_definido;
	}

	function getNome(){
		//método pra recuperar o nome
		return $this->nome;
	}

	//getters e setters - são métodos utilizados para configurar valores em atributos e recuperar os atributos.
}

$pessoa = new Pessoa(); //instanciando a classe, q está sendo referenciado pela variavel pessoa.

$pessoa->setNome('Iasmin');
echo $pessoa->getNome();
?>