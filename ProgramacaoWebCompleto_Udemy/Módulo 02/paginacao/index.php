<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Paginação</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btn_pesquisar').click(function(){

                    //requisicao ajax para página de pesquisa
                    $.ajax({
                        url: "pesquisar_produtos.php",
                        method: 'post',
                        data: $('#formPesquisa').serialize(),
                    }).done(function(retorno_requisicao) {
                        $('#div_resultado_paginacao').html(retorno_requisicao);

                        //ação que será tomada após clicar no link de paginação
                        $('.paginar').click(function(){
                            var pagina_clicada = $(this).data('pagina_clicada');
                            pagina_clicada = pagina_clicada - 1; //necessário para ajusar o parâmetro offset
                           
                            //recupera os parametros de paginacao do formulario
                            var registros_por_pagina = $('#registros_por_pagina').val();
                            var pagina_atual = $('#pagina_atual').val();

                            var offset_atualizado = pagina_clicada * registros_por_pagina;
                            //aplica o valor atualizado do offset ao campo do form
                            $('#offset').val(offset_atualizado);

                            //refaz a pesquisa (chamada recursiva do método)
                            $('#btn_pesquisar').click();
                        });
                    });

                    return false; //para não ativar a trigger de submit do formulário

                })
            })
        </script>

	</head>

	<body>

	    <nav class="navbar navbar-default navbar-static-top"></nav>

	    <div class="container">
            <div class="row">
                <form id="formPesquisa">
                    <!-- os campo registros_por_pagina e offset atualmente estão escondidos (hidden)
                    mas sua visualização pode ser ativida no formulário trocando o type de hidden para text -->
                    <input type="hidden" name="registros_por_pagina" id="registros_por_pagina" value="4" />
                    <input type="hidden" name="offset" id="offset" value="0" />

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descricao">Descrição:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço:</label>
                            <select  class="form-control" name="tipo_pesquisa_preco">
                                    <option value="preco_maior">Mario que:</option>
                                    <option value="preco_menor">Menor que:</option>
                            </select>
                            <input type="text" class="form-control" id="preco" name="preco">
                        </div>
                    </div>
                    <button class="btn btn-primary" id="btn_pesquisar">Pesquisar</button>
                </form>
            </div>
		</div>

        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="div_resultado_paginacao"></div>
                </div>
            </div>    
        </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>