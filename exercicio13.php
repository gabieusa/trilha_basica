//Escreva um programa que imprima todos os números pares do intervalo fechado de
1 a 100.

 <?php
$numero = $_GET["numero"];
   $fim = $numero + 100;
    while ($numero<= $fim) {
    if ($numero % 2 == 0)
   {
    echo "<br>".$numero;
   }    
    elseif ($numero % 2 != 0)
   {
   $numero++;
   echo "<br>".$numero;
   }    

   $numero= $numero +2;
 }
?>
