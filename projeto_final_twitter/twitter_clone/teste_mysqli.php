<?php
	
  require_once('bd_class.php'); 


	$sql = " SELECT * FROM usuarios ";

	$objDb = new db(); //instancia da classe 
	$link = $objDb->conecta_mysql(); //execução da função conecta mysql

	$resultado_id = mysqli_query($link, $sql);

	// esse teste está relacionado com erro de sintaxe ou de instrução de consulta somente
	//essa função transforma os dados recebidos em array

	if($resultado_id){

        //a função mysqli retorna as informações indexadas com associação(MYSQLI_ASSOC) ou por número(MYSQLI_NUM), O MYSQLI_BOTH retorna os dois.

        $dados_usuario = array();

        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //percorrendo todas as linhas do banco de dados para q cada interação, a variavel linha contenha aquela informação. 
           $dados_usuario[] = $linha;
        } 

        foreach ($dados_usuario as $usuario) { //percorrendo o array e dividir os indices e retornando todos os registro 
          var_dump($usuario);
          // var_dump($usuario['email']); retornando somente uma informação
          echo '<br /><br />';
        }

  }else{
        
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

    }

?>