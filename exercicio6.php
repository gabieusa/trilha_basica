<?php
// Gerar o invertido de um número com três algarismos
function inverteNumeros($num)
{
    $rev_num = 0;
    while($num > 1)
    {
    	
    $rev_num = (int)$rev_num * 10 + (int)$num % 10;
    $num = (int)$num / 10;
    }
    return $rev_num;
}
 
$num = 761;
echo "Invertido: ",
       inverteNumeros($num);
?>
