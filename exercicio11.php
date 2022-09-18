//Leia uma letra e mostre se ela é vogal ou consoante.
<?php
function vogalouconsoante($x)
{
    if ($x == 'a' || $x == 'e' ||
        $x == 'i' || $x == 'o' ||
        $x == 'u')
        echo "vogal" . "\n";
    else
        echo "consoante" . "\n";
}
 
vogalouconsoante('c');
vogalouconsoante('e');

?>
