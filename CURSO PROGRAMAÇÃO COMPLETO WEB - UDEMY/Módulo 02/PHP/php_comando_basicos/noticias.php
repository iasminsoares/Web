<?php


$noticias = array ();

$noticias[1]['titulo'] = 'título da noticia 1';
$noticias[1]['conteudo'] = 'conteúdo dessa noticia 1';

$noticias[2]['titulo'] = 'título da noticia 2';
$noticias[2]['conteudo'] = 'conteúdo dessa noticia 2';

$noticias[3]['titulo'] = 'título da noticia 3';
$noticias[3]['conteudo'] = 'conteúdo dessa noticia 3';

//var_dump($noticias);

//$noti = 1;

for($noti = 1; $noti <= 3 ; $noti = $noti + 1){ 
	echo $noticias[$noti]['titulo'];
	echo '<br />';
	echo $noticias[$noti]['conteudo'];
	echo '<br />';
}

/*é muito comum em sistemas profissionais recuperar informações de banco de dados atrás de estruturas de repetições percorrendo arays.*/


/*
do{
	echo $noticias[$noti]['titulo'];
	echo '<br/>';
	echo $noticias[$noti]['conteudo'];
	echo '<br />';
	$noti = $noti + 1;

} while ($noti <= 3);
*/

/*
while ($noti <= 3) {

	echo $noticias[$noti]['titulo'];
	echo '<br />';
	echo $noticias[$noti]['conteudo'];
	echo '<br />';

	$noti = $noti + 1;
	# code...
}
*/



?>