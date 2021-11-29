<?php

require_once('bd_class.php');

$usuario =  $_POST['usuario'];
$email =  $_POST['email'];
$senha = md5($_POST['senha']); //criptografando os dados


//configurando inserção dos dados no bd

$objDb = new db();
$link = $objDb->conecta_mysql();

$usuario_existe = false;
$email_existe = false;

//verificar se o usuário já existe

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){

           $usuario_existe = true;
        }

    }else{
        echo 'Erro ao tentar localizar o registro de usuário';
        echo '<br />';
    }

    //verificar se o e-mail já existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['email'])){

          $email_existe = true;
		}

    }else{
        echo 'Erro ao tentar localizar o registro de email';
    }

    if ($usuario_existe || $email_existe) {

    	$retorno_get = '';

    	if ($usuario_existe) {

    		$retorno_get.= "erro_usuario=1&";	    	
		}

    	if ($email_existe) {

    		$retorno_get.= "erro_email=1&";	    	
		}

		header('Location: inscrevase.php?'.$retorno_get);
		die(); //essa funções interrompe a execução do script

    }

   

/*Ao usar aspas duplas "" pra encapsular a string do insert, dentro de values usei aspas simples pra não dar conflito.
Porém, aspas duplas antes de fazer a operação de atribuição da string ao uma variavel, ela verifica se internamente contem alguma variavel,
caso ache, ela converte o valor da variavel pra informação da qual a variavel faz referencia, assim nao precisa concatenar. */

$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')"; //registrando usuario no banco

//executar a query
 
if (mysqli_query($link, $sql)) { //paramentros de conexão e insert
	echo 'Usuário registrado com sucesso!';
} else{
	echo 'Falha ao registrar usuario!';
}

?>