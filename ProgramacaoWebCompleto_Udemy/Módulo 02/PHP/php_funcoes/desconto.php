<?php
//O REQUIRE_ONDE É PRA INCLUIR OUTROS ARQUIVOS
require_once("funcoes_desconto.php");
$valor_total_produto = 800;
$valor_desconto = 10;

$valor_total_com_desconto = calcular_desconto($valor_total_produto, $valor_desconto);


?>

Valor do produto: R$ <?php echo $valor_total_produto ?> <br>
Valor do desconto: R$ <?php echo $valor_desconto ?> % <br>
Valor do produto com desconto: R$ <?php echo $valor_total_com_desconto ?> <br>