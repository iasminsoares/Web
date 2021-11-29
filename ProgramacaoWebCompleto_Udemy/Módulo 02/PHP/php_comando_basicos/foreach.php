<?php

//O COMANDO DE REPETIÇÃO FOREACH É ESPECILIZADO PARA ARRAYS. POR ISSO, OS CONTROLES DE FINALIZAÇÃO DAS INTERAÇÕES ESTÃO INTRISECAS, OU SEJA, ELE PERCORRE OS ARRAYS E AUTOMATICAMENTE FINALIZA AS INTERAÇÕES, MUITO UTIL QND NÃO SABEMOS O TAMANHO DO ARRAY.

$produtos[1] = 'Sofá';
$produtos[2] = 'Mesa';
$produtos[3] = 'Cadeira';
$produtos[4] = 'Fogão';
$produtos[5] = 'Geladeira';

foreach ($produtos as $produto) {
	echo $produto.'<br />';

	if ($produto == 'Mesa') {
		echo 'Compre um mesa e ganhe desconto de 25% em 4 cadeiras. <br />';
	}
}


?>