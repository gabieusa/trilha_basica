//Leia uma letra e mostre se ela é vogal ou consoante.
<?php 
[code]$letras = “{abc1}”;

$consoante = abc(‘a’,strtotime($letras));
$vogal = abc(‘b’,strtotime($letras));

    switch ($vogal){
      case 1: $vogal = “a”; break;
      case 2: $vogal = “e”; break;
      case 3: $vogal = “i”; break;
      case 4: $vogal = “o”; break;
      case 5: $vogal = “u”; break;
    }          
      
     switch ($consoante){ 
      case 1: $consoante = “b”; break;
      case 2: $consoante = “c”; break;
      case 3: $cosoante = “d”; break;
      case 4: $consoante = “f”; break;
      case 5: $consoante = “g”; break; 
      case 6: $consoante = “j”; break;
      case 7: $consoante = “k”; break;
      case 8: $cosoante = “l”; break;
      case 9: $consoante = “m”; break;
      case 10: $consoante = “n”; break; 
      case 11: $consoante = “p”; break;
      case 12: $consoante = “q”; break;
      case 13: $cosoante = “r”; break;
      case 14: $consoante = “s”; break;
      case 15: $consoante = “t”; break; 
      case 16: $consoante = “v”; break;
      case 17: $consoante = “w”; break;
      case 18: $cosoante = “x”; break;
      case 19: $consoante = “z”; break;
     }            
 //B, C, D, F, G, J, K, L, M, N, P, Q, R, S, T, V, W, X, Z 
       
{abc1_ext} = ("$vogal de $consoante");[/code]

 ?>
