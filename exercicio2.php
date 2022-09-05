//Função 4 números somar os 2 maiores
<?php 
$maior1= 0;
$maior2 = 0;
$numero = array(2,3,22,10,11,100);
foreach (function($numero){
    if($numero > $maior1) {
        $maior2 = $maior1;
        $maior1 = $numero;
    } else if($numero > $maior2){
        $maior2 = $numero;
    }
 echo " = $maior1<br>\n";
 echo " = $maior2<br>\n";
}
?>
