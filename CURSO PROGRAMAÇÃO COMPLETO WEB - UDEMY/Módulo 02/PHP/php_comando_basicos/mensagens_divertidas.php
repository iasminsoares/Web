<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?= 'Teste tag de impressão'?>
		<?php
			echo "Teste tag padrão";
			echo "<br/>";
			//este é um comentário de apenas uma linha

			/*este é comentários 
			de várias 
			linhas*/

			#este é outra forma de comentário de uma linha
			
			echo "teste de impressão com echo<br/>";
			print "teste de impressão com print";

			echo '<br/>';
			// variaveis

			//int
			$valor_inteiro = 1 * 4;
			echo $valor_inteiro;

			echo '<br/>';

			$valor_inteiro = $valor_inteiro * 2;
			echo $valor_inteiro;

			echo '<br/>';

			//float 
			$valor_fracionado = 1.5;
			echo $valor_fracionado;

			echo '<br/>';

			//boolean
			$estado = true; // false
			echo $estado;

			//String
			//$texto = 'Curso PHP - '.$valor_inteiro;
			$texto = "Curso PHP - $valor_inteiro";
			echo $texto;

			echo '<br/>';
			// arrays

			$mensagens_divertidas['a'] = 'TESTE ARRAY 1';
			$mensagens_divertidas['b'] = 'TESTE ARRAY 2';
			$mensagens_divertidas[3] = 'TESTE ARRAY 3';
			$mensagens_divertidas[4] = 'TESTE ARRAY 4';
			$mensagens_divertidas[5] = 'TESTE ARRAY 5';


			//var_dump($mensagens_divertidas);

			echo '<br/>';

			//print_r($mensagens_divertidas);
			/*o var_dump e o print_r imprime no navegador o array todo e com os indices de cada*/

			//echo '<br/>';

			echo $mensagens_divertidas[3];
			echo '<br/>';
			echo $mensagens_divertidas['a'];

			echo '<br/>';

			// parametros
			$mensagens_divertidas = array('a' => 'TESTE ARRAY 1');



		?>

	</body>
</html>