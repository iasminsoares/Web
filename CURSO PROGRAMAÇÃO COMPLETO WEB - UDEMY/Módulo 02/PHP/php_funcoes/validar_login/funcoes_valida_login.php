<?php

function valida_login($login, $senha){

	//GERALMENTE VALIDA DIRETO NO BANCO DE DADOS MAS NESTE CASO NÃO

	$login_bd = 'iasmin.borges';
	$senha_bd = '123';

	if ($login == $login_bd && $senha == $senha_bd ) {
		return true;
	}

	return false;
}
?>