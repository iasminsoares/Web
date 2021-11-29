<?php

require_once("funcoes_valida_login.php");

$login_usuario = $_POST['login'];
$senha_usuário = $_POST['senha'];

$usuario_validado = valida_login($login_usuario, $senha_usuário);

if ($usuario_validado) {
	echo "Acesso liberado";
}else{
	echo "Acesso negado!";
}

?>