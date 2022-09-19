<?php 
//Leia três números e mostre o maior entre eles
$n1 = 10; 
$n2 = 50; 
$n3 = 7; 
$ordem = array($n1,$n2,$n3); 
sort($ordem); 
foreach ($ordem as $l ) { 
    echo "$l "; 
} 
echo "<br>O maior numero é ".max($ordem); 
//.$ordem[2]; 
//.max($ordem); 
?>
