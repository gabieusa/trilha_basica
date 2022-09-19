<?php
//Leia o número equivalente ao mês e imprima a quantidade de dias deste mês e o
// nome do mesmo por extenso.
$dma = "2022/04/19";
$funcao = new DateTime($dma);

echo $numDias = $funcao->format('t');

?>

