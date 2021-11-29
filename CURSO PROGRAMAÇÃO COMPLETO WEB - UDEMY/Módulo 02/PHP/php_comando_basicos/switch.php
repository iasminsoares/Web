<?php

/*A OPÇÃO É COMPARADA COM OS CASES PRÉ DEFINIDO DO SWITCH.
  A OPERAÇÃO FEITA EM CADA CASE É FEITA POR IGUALDADE.
  AO ENCONTRAR O CASE IGUAL, O OS BLOCOS DE CÓDIGOS A PARTIR DO IGUAL, SERÃO PROCESSADOS.
  O DEFAULT FUNCIONA QND A OPERAÇÃO NÃO RETORNA EM NENHUM DOS CASES
  O BREAK PERMITE Q O CASE SEJA PROCESSADO SOMENTE ATÉ AQUELE PONTO. */

  $opção = 3;
switch ($opção) {
	case 1:
		echo "primeiro case";
		break;
	case 2:
		echo "segudo case";
		break;

	case 3:
		echo "terceiro case";
		break;
	
	default:
		echo "primeiro case";
		break;
}
?>