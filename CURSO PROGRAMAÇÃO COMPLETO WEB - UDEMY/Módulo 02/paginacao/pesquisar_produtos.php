<?php

require_once('db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();


//////////////////////////////////////////////////////////////////////
//======== ajusta os parâmetros recebidos para criar a query =======//
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$tipo_pesquisa_preco = $_POST['tipo_pesquisa_preco'];

//define o operador para pesquisar o preço com base no filtro
$operador_pesquisa_preco = ' = ';
if($tipo_pesquisa_preco != "") {
    if($tipo_pesquisa_preco == 'preco_maior') {
        $operador_pesquisa_preco = ' > ';
    } else if($tipo_pesquisa_preco == 'preco_menor') {
        $operador_pesquisa_preco = ' < ';
    } 
}
//////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
//======== recupera os parâmetros para definir a quantidade de registros por página =======//
$registros_por_pagina = $_POST['registros_por_pagina'];
$offset = $_POST['offset'];
//////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////
//======== recupera o total de registros com base no filtro =======//
$sql = " SELECT COUNT(*) as total_registros FROM produtos WHERE 1=1 ";
$sql.= $descricao != "" ? " AND descricao LIKE '%$descricao%' " : "";
$sql.= $preco != "" ? " AND preco $operador_pesquisa_preco $preco " : "";

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
    $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
    $total_registros = $registro['total_registros'];
} else {
    echo 'Erro ao tentar recuperar o total de registros!';
}



//
//////////////////////////////////////////////////////////////////////

$sql = " SELECT * FROM produtos WHERE 1=1 ";
$sql.= $descricao != "" ? " AND descricao LIKE '%$descricao%' " : "";
$sql.= $preco != "" ? " AND preco $operador_pesquisa_preco $preco " : "";

$sql.=" LIMIT $registros_por_pagina OFFSET $offset ";

//echo $sql; //descomentar para exibir a query para efetuar testes

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){

    echo '<table class="table">';
        echo '<thead>';
            echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>DESCRIÇÃO</th>';
                echo '<th>PREÇO</th>';
                echo '<th>FOTO</th>';
            echo '</tr>';
        echo '</thead>';

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            echo '<tbody>';
                echo '<tr>';
                    echo '<td>'.$registro['id'].'</td>';
                    echo '<td>'.$registro['descricao'].'</td>';
                    echo '<td>'.$registro['preco'].'</td>';
                    echo '<td><img src="imagens/'.$registro['foto'].'" width="75" height="75" /></td>';
                echo '</tr>';
            echo '</tbody>';
        }
     echo '</table>';


     //como o offset (página) inicia em zero, ajusto para que visualmente seja indicado o início em seu respectivo valor +1
     $offset++;
     //descobre a quantidade de páginas com base no total de registros / dividido pela quantidade de registros por página
     $total_paginas = ceil($total_registros / $registros_por_pagina); // a função ceil() arredonda o resultado para o inteiro superior mais próximo
     echo "Página ".ceil($offset / $registros_por_pagina)." de $total_paginas Total de registros: $total_registros";

     echo "<br />";

     //cria os links de paginação
     $pagina_atual = ceil($offset / $registros_por_pagina); //localiza a pagna atual

     for($i = 1; $i <= $total_paginas; $i++) {    
        
        $classe_botao = $pagina_atual == $i ? 'btn-primary' : 'btn-default'; //aplica a classe para o botão da página atual
        echo '<button class="btn '.$classe_botao.' paginar" data-pagina_clicada="'.$i.'">'.$i.'</button>';
     }

     echo "<br /><br />";

} else {
    echo 'Erro na consulta dos registros!';
}


?>