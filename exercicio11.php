<?php
//Leia uma letra e mostre se ela é vogal ou consoante.
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
            return true;
        default:
            return false;
    }
}

 $letra = lerLetra();
 $letra = "W";
if (isVogal($letra)) {
    echo("A letra é vogal");
    return;
} 
echo("A letra é consoante")


//function vogalouconsoante($x)
//{
 //   if ($x == 'a' || $x == 'e' ||
 //       $x == 'i' || $x == 'o' ||
 //       $x == 'u')
        //echo "vogal" . "\n";//
 //   else
 //       echo "consoante" . "\n";
//}
 
//vogalouconsoante('c');
//vogalouconsoante('e');
?>

