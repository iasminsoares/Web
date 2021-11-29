<?php

//is_array - verifica se uma variavel é um arrya.

$array = array();
$retorno = is_array($array);

if ($retorno) {
	echo "Verdadeiro <br>";
} else{
	echo "Falso";
}

//in_array verifica oq contem dentro do array
$array1 = array('mac', 'linux', 'windows <br>');
$retorno = in_array('mac', $array1);
//1º definir oq será procurado
//2º onde será procurado

if ($retorno) {
	echo "Verdadeiro<br>";
} else{
	echo "Falso";
}

//array_keys - pre pegar apenas as chaves de um array
$produtos = array(10 => 'Notebook', 11=>'Teclado <br>');
$chaves_array = array_keys($produtos);

//var_export é utilizada pra testar e exibir na tela, valores de arrays
var_export($chaves_array);

//sort - ordenação de array sem manter o indice

//$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola <br>');
//sort($frutas);
//var_export($frutas);

//asort ordenação de array matendo o indice

$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola <br>', "<br>");
asort($frutas);
var_export($frutas);

//count é utilizada pra contar elementos de um array

$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola' , "<br>");

$itens_array = count($frutas);
echo $itens_array." elementos <br>";

//array_menge - unir arrays
$array2 = array('mac', 'linux');
$array3 = array('windows', "<br>");

$novoarray = array_merge($array2, $array3);
var_export($novoarray);


//EXPLODE - divide a string baseade num delimitador, retorna um array baseado no delimitador e na string q passar

$string = "20/10/2020";
$retorno1 = explode("/", $string);
var_export($retorno1);
//1º delimitador - oq iremos usar pra dividir a string
//2º é a string q será cortada/delimitada

//IMPLODE - junta os elementos de um array, em uma string

$nova_string = implode("/", $retorno1);
echo $nova_string;

//1º oq será usado pra concatenar as strings
//2º definir os arrays pra fazer a concatenações.

?>