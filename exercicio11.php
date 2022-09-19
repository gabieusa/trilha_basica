//Leia uma letra e mostre se ela é vogal ou consoante.
<?php
function lerLetra() {
    echo ("Introduza uma letra: ");
}

function isVogal($caracter) {
    switch ($caracter) {
        case "a":
        case "A":
        case "e":
        case "E":
        case "i":
        case "I":  
        case "o":
        case "O":
        case "u":
        case "U": 
            echo true;
        default:
            echo false;
    }
}

 $letra = lerLetra();
if (isVogal($letra)) echo("A letra é vogal");
else echo("A letra é consoante");
?>


//function vogalouconsoante($x)
//{
 //   if ($x == 'a' || $x == 'e' ||
 //       $x == 'i' || $x == 'o' ||
 //       $x == 'u')
        echo "vogal" . "\n";
 //   else
 //       echo "consoante" . "\n";
//}
 
//vogalouconsoante('c');
//vogalouconsoante('e');
