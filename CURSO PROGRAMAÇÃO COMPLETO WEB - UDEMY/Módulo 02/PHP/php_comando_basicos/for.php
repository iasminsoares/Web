<?php

/* 1º - atribuição do valor a variavel, que vai ser utilizada na comparação. É executado apenas no inicio do for.
   2º - na sequencia é executado a comparação, se o valor da variavel retornar um valor falso na comparação ele sai do laço.
   sendo verdadeiro ele vai fazer a execução do bloco de código para q na sequencia ele faça o incremento/decremento no laço.
 */

for ($i=10; $i > 0 ; $i = $i - 2) { 
	echo $i.'<br />';
	# code...
}

?>