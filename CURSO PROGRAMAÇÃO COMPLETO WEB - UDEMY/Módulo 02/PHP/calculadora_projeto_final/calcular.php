<?php

require_once 'classes/calculadora.php';

//recuperando valores do formulário
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();
//ao instanciar a classe calculadora, iremos criar em memória o objeto calculadora.

//SETAR VALORES

$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);



switch ($operacao) {
	case 'somar':
		$calculadora->somar();	
		break;

	case 'subtrair':
		$calculadora->subtrair();	
		break;

	case 'multiplicar':
		$calculadora->multiplicar();	
		break;

	case 'dividir':
		$calculadora->dividir();	
		break;
}

echo $calculadora->getTotal();

?>