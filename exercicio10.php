//Leia o número equivalente ao mês e imprima a quantidade de dias deste mês e o
nome do mesmo por extenso.
<?php
[code]$dma = “{data1}”;

$dia = date(‘d’,strtotime($dma))-0; // não sei pra que serve esse zero.
$mes = date(‘m’,strtotime($dma));
$ano = date(‘Y’,strtotime($dma));

switch ($dia){

case 1: $dia = “primeiro dia”; break;
case 2: $dia = “dois dias”; break;
case 3: $dia = “três dias”; break;
case 4: $dia = “quatro dias”; break;
case 5: $dia = “cinco dias”; break;
case 6: $dia = “seis dias”; break;
case 7: $dia = “sete dias”; break;
case 8: $dia = “oito dias”; break;
case 9: $dia = “nove dias”; break;
case 10: $dia = “dez dias”; break;
case 11: $dia = “onze dias”; break;
case 12: $dia = “doze dias”; break;
case 13: $dia = “treze dias”; break;
case 14: $dia = “catorze dias”; break;
case 15: $dia = “quinze dias”; break;
case 16: $dia = “dezesseis dias”; break;
case 17: $dia = “dezessete dias”; break;
case 18: $dia = “dezoito dias”; break;
case 19: $dia = “dezenove dias”; break;
case 20: $dia = “vinte dias”; break;
case 21: $dia = “vinte e um dias”; break;
case 22: $dia = “vinte e dois dias”; break;
case 23: $dia = “vinte e três dias”; break;
case 24: $dia = “vinte e quatro dias”; break;
case 25: $dia = “vinte e cinco dias”; break;
case 26: $dia = “vinte e seis dias”; break;
case 27: $dia = “vinte e sete dias”; break;
case 28: $dia = “vinte e oito dias”; break;
case 29: $dia = “vinte e nove dias”; break;
case 30: $dia = “trinta dias”; break;
case 31: $dia = “trinta e um dias”; break;
}

// configuração mes

switch ($mes){

case 1: $mes = “Janeiro”; break;
case 2: $mes = “Fevereiro”; break;
case 3: $mes = “Março”; break;
case 4: $mes = “Abril”; break;
case 5: $mes = “Maio”; break;
case 6: $mes = “Junho”; break;
case 7: $mes = “Julho”; break;
case 8: $mes = “Agosto”; break;
case 9: $mes = “Setembro”; break;
case 10: $mes = “Outubro”; break;
case 11: $mes = “Novembro”; break;
case 12: $mes = “Dezembro”; break;
}

switch ($ano){

case 2017: $ano = “dois mil e dezessete”; break;
case 2018: $ano = “dois mil e dezoito”; break;
case 2019: $ano = “dois mil e dezenove”; break;
case 2020: $ano = “dois mil e vinte”; break;
case 2021: $ano = “dois mil e vinte e um”; break;
case 2022: $ano = “dois mil e vinte e dois”; break;
case 2023: $ano = “dois mil e vinte e três”; break;
case 2024: $ano = “dois mil e vinte e quatro”; break;
case 2025: $ano = “dois mil e vinte e cinco”; break;
case 2026: $ano = “dois mil e vinte e seis”; break;
case 2027: $ano = “dois mil e vinte e sete”; break;
case 2028: $ano = “dois mil e vinte e oito”; break;
case 2029: $ano = “dois mil e vinte e nove”; break;
case 2030: $ano = “dois mil e trinta”; break;
case 2031: $ano = “dois mil e trinta e um”; break;
case 2032: $ano = “dois mil e trinta e dois”; break;
case 2033: $ano = “dois mil e trinta e três”; break;
case 2034: $ano = “dois mil e trinta e quatro”; break;
case 2035: $ano = “dois mil e trinta e cinco”; break;
case 2036: $ano = “dois mil e trinta e seis”; break;
case 2037: $ano = “dois mil e trinta e sete”; break;
case 2038: $ano = “dois mil e trinta e oito”; break;
case 2039: $ano = “dois mil e trinta e nove”; break;
case 2040: $ano = “dois mil e quarenta”; break;
case 2041: $ano = “dois mil e quarenta e um”; break;
case 2042: $ano = “dois mil e quarenta e dois”; break;
case 2043: $ano = “dois mil e quarenta e três”; break;
case 2044: $ano = “dois mil e quarenta e quatro”; break;
case 2045: $ano = “dois mil e quarenta e cinco”; break;
case 2046: $ano = “dois mil e quarenta e seis”; break;
case 2047: $ano = “dois mil e quarenta e sete”; break;
case 2048: $ano = “dois mil e quarenta e oito”; break;
case 2049: $ano = “dois mil e quarenta e nove”; break;
case 2050: $ano = “dois mil e cinquenta”; break;
}

// coloquei a variavel $dataextens como atributo por valor
{data1_ext} = ("$dia de $mes de $ano");[/code]
?>


