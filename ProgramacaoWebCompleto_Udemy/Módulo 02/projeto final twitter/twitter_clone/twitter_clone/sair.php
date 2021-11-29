<?php
//quando o usuário clicar em sair na página home, será redirecionado pra esse script

session_start();

//recuperando VARIÁVEIS da sessão

unset($_SESSION['usuario']);
unset($_SESSION['email']);

//utilizando a função unset, conseguimos eliminar indices de array, passando o parametro e o indice que quer eliminar

header('Location: index.php'); //redirecionando pra página principal.


?>