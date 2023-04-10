//Escreva um programa que imprima todos os números de 1 até 100, inclusive, e a
soma de todos eles.

<?php

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    $soma += $i;
}
echo "Soma de todos os números: " . $soma . "\n";

?>
