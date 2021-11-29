<?php

//VALIDANDO INFORMAÇÕES DE UM FORMULÁRIO

if (isset($_POST['nome']) && empty($_POST['nome']) ) {
	echo "Preencha o nome completo. <br>";

	//Verificando se foi iniciada a variavel nome e se ela está vazia.
}

if (isset($_POST['cpf']) && empty($_POST['cpf']) ) {
	echo "Preencha o CPF completo.<br>";

	//Verificando se foi iniciada a variavel cpf e se ela está vazia.
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf']) ) {
	echo "CPF com apenas números.";

	//Verificando se foi iniciada a variavel cpf contem somente numero.
	//senão digitar nada ele enterá como false, com a negação ! ele virá true
}


?>

<form method="post" action="">
	<label>
		Nome Completo:
		<input type="text" name="nome">
	</label>

	<label>
		CPF:
		<input type="text" name="cpf">
	</label>

	<input type="submit" name="cadastrar">

</form>