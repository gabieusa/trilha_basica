//Leia três números e mostre o maior entre eles
<?php 
$n1 = 10; 
$n2 = 50; 
$n3 = 7; 
$ordem = array($n1,$n2,$n3); 
sort($ordem); 
foreach ($ordem as $l ) { 
echo "$l "; 
} 
$maior = ($n1 > $n2)? $n1: $n2; 
$maior = ($maior > $n3)? $maior: $n3; 
echo "<br>O maior numero é $maior"; 
//.$ordem[2]; 
//.max($ordem); 
?>
