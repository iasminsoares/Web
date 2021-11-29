<?php

/* O LAÇO DE REPETIÇÃO WHILE FICA EXECUTANDO ATÉ RETONAR FALSO.
   O BLOCO DE CÓDIGO NÃO EXECUTA SEM VERIFICAR A CONDIÇÃO .

*/
	$num = 1;
	while ($num < 10) {

		$num = $num + 1;

		if ($num == 5) {
			continue;
		}

		//CONTINUE - FAZ COM QUE A INTEÇÃO VAI PRA PRÓXIMA

		echo $num;
		echo '<br />';
	}
?>