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
