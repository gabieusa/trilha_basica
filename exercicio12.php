//Escreva um programa que verifique se um ano é bissexto. Um ano é bissexto se ele
é divisível por 4. Entretanto, se o ano é divisível por 100, ele não é bissexto. Mas, se
ele for divisível por 400, ele volta a ser bissexto.

<?php
function verificaAnoBissexto(int $ano)
            {
                if (($ano % 4) == 0 && ($ano % 100) <> 0) {
                    echo "O ano de $year é BISSEXTO. <br>";
                } elseif ($ano % 400 == 0) {
                    echo  "O ano de $ano é BISSEXTO. <br>";
                } else {
                    echo "O ano de $ano não é BISSEXTO. <br>";
                }
               
            }

            $ano = $_GET["ano"] ?? 0;
          
  ?>



<?php
$ano;
if (isset($_GET["ano"])) {
$ano = $_GET["ano"];
}
if (($ano % 100 != 0 && $ano % 4 == 0) || ($ano % 400 == 0)) {
echo "Esse ano é bissexto";
}
else {
echo "Esse ano não é bissexto";
}
?>
