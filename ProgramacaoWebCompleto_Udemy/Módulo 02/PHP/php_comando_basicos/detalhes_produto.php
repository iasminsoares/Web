<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>

		<div class="container">
 
			<div class="row">
				<h1>Detalhes do produto</h1>
			</div>

				<div class="row">
					<div class="col-md-4">
						<?php

							/*O MÉTODO GET PASSA PARAMETRO ATRAVÉS DA URL E DADOS FICAM EXPOSTOS NAS URLS
    						EM TERMOS DE SEGURANÇA, NÃO É RECOMENDADO.
    						JÁ O MÉTODO POST NÃO MOSTRA O VALOR DO PARAMETRO ATRÁVES DA URL MAS SÃO ENVIADOS POR MEIO DE PACOTES.
    						A DIFERENÇA ENTRE ELES: O GET É UM POUCO MAIS RÁPIDO E O GOST É MAIS SEGURO.
    						VARIAVEL GET e POST - SÃO VARIÁVEIS Q ARMAZENA DADOS SUBMETIDOS DE FORMULÁRIOS PREENCHIDOS.
    						ESSES DADOS SÃO INDEXADOS A PARTIR DO NOME DO COMPONENTE. */ 

							$id_produto = $_GET['id_produto']; //recuperando informações do formulário
							$detalhes[1] = "Detalhes da cadeira";
							$detalhes[2] = "Detalhes do fogão";
							$detalhes[3] = "Detalhes do roteador";
							$detalhes[4] = "Detalhes da TV";

							echo $detalhes[$id_produto];
						?>
					</div>
				</div>
			</div>
	</body>
</html>