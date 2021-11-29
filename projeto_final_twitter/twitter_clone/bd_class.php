<?php

class bd {
	//Para conectar o bd com o php precisa de 4 dados para conexão:

	//HOST - endereço onde o mySQl está instalado. Neste caso está local, ou seja, no msm local que o Apache.

	private $host = 'localhost';

	//USUARIO - é a conexão com o SQl para realizar a autenticaçao.
	private $usuario = 'root';

	//SENHA -  é a conexão com o SQl para realizar a autenticaçao.
	private $senha = '';

	//BANCO DE DADOS - onde irá todos os registros 
	private $database = 'twitter_clone';

	public function conecta_mysql(){
		//criando conexão com o banco de dados
		//this faz referencia a propriedade da classe existente dentro da própria classe.
		//localizacao do bd, usuario, senha, banco de dados

		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database); //conexão estabelecida

		//ajustar o charset de comunicação entre a aplicação e o banco de dados.
		//segundo parametro esperado é qual o charset que ele vai setar nesse processo de comunicação. Neste caso é o UTF8

		mysqli_set_charset($con, 'utf8');

		//verificando erro de conexão com o bd
		if (mysqli_connect_errno()) {
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error(); //recuperando msg de erro
		}

		return $con;
	}
}

?>