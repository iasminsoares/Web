<?php
	//Geralmente, o session é colocado como 1ª instrução de script, antes de echo, print ou vardump para não dar conflito
	//é utilizado para obrigar o usuário realizar a autenticação, só expiram quando forçamos a remoção dos indices nas váriaveis de sessão ou qnd acionamos o botão sair.
	session_start(); // essa super global comando indica ao script que ele terá acesso as variáveis de sessão


//VALIDAÇÃO DE USUARIO NO BANCO DE DADOS 

	require_once('bd_class.php'); //incluindo a classe bd

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']); //criptografando dados


	$sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

	$objDb = new db(); //instancia da classe 
	$link = $objDb->conecta_mysql(); //execução da função conecta mysql

	$resultado_id = mysqli_query($link, $sql);

	// esse teste está relacionado com erro de sintaxe ou de instrução de consulta somente
	//essa função transforma os dados recebidos em array

	if($resultado_id){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){

        	//Criando variáveis da sessão
        	$_SESSION['id_usuario'] = $dados_usuario['id'];
        	$_SESSION['usuario'] = $dados_usuario['usuario'];
        	$_SESSION['email'] = $dados_usuario['email'];

            header('Location: home.php'); //redirecionado pra página home

        }else{

            header('Location: index.php?erro=1');

        }

    }else{
        
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

    }


/*
  update - retorna true/false
  insert - retorna true/false
  select - retorna false/resource é com ele q recuperamos os dados de uma consulta, através de objeto ou arrays.
  delete - retorna true/false

 */


?>