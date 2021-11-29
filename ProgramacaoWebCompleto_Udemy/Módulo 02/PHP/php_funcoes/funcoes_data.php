<?php

//Date - exibir e formatar datas no php
echo $data = date("d/m/Y H:i <br />");

//str totime - converte uma string para um numero único de time(em segundos) para conseguirmos fazer calculos no php

$data_inicial = '2020/04/02';
$data_final = '2020/04/05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;
echo $diferenca_time." diferença em segundos. <br />";

$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_time / $diaSegundos;
echo $diferenca_dias." diferença de dias."


?>