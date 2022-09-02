//Leia um número e imprima se este número é par ou ímpar
<?php
$numero = 3;

if ( $numero & 1 ) {
  echo "$numero é impar!";
} else {
  echo "$numero é par!";
}
?>
