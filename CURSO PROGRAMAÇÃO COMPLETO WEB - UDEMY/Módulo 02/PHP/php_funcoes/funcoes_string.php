<?php

// strtolower - converte um texto para letra minuscula

$texto = "Curso completo de PHP <br>";

//-----------------------------------------------------------------------------------------------
echo strtolower($texto);

//srttoupper - converte um texto para letra maiuscula.
$texto = "Curso completo de PHP <br>";
echo strtoupper($texto);

//-----------------------------------------------------------------------------------------------

//ucfirst - localiza a primeira caractere e deixa maiusculo apenas a primeira letra.
$texto = "curso completo de php <br>";
echo ucfirst($texto);

//-----------------------------------------------------------------------------------------------

//str_replace - localiza o . e substitui por ,

$texto_num = "123.234.734-56 <br>";
//echo str_replace("." , "," , $texto_num);
$cpf = str_replace(".", "", $texto_num);
$cpf = str_replace("-", "", $cpf);
echo $cpf;
// search - oq vai procurar na string
//replace é o que será substituido na string
//subject é a variavel a ser pesquisada


//-----------------------------------------------------------------------------------------------

//substr - retorna parte de uma string

$texto = "curso completo de php <br>";
$noticia = substr($texto, 0, 20);
echo $noticia." ...";



//1º parametro é o texto q queremos cortar
//2º é a posição inicial do caractere.
//3º é a qtd de caractere q quero pegar


//-----------------------------------------------------------------------------------------------

//strlen - conta o tamanho de caracteres de um texto e os espaços.
//validando tamanho do cpf
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$total_string_cpf = strlen($cpf);

if ($total_string_cpf != 11 && $cpf != '' ) {
	echo "CPF inválido!";
}


?>

<form method="post" action="">
	<label>
		CPF:
		<input type="text" name="cpf">
	</label>

	<input type="submit" name="cadastrar">
</form>