<?php

//FUNÇÃO SEM RETORNO - APENAS EXECUTA O CONTEM DENTRO DA FUNÇÃO

function exibir_boas_vindas($nome){
	echo "Bem vindo ao Curso de PHP ".$nome;
}

//FUNÇÃO COM RETORNO - EXECUTA E RETORNA UM VALOR PARA ONDE É CHAMADO A FUNÇÃO.
function calcular_soma($num1, $num2){
	return $num1+$num2;
}


//CHAMANDO AS FUNÇÕES
//se definir q terá parametro, obrigatoriamente preciso definir e passar esse parametro.
 //exibir_boas_vindas('Paulo');
 echo calcular_soma(2,2);

?>