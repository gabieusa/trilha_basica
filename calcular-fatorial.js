function Fatorial(x){
if (x == 0)
    return 1;
else
    return x * Fatorial(x-1);
}


console.log("Resultado da funcao Fatorial: ", Fatorial(5));

var resultado = Fatorial(5); // 120
//5! 5 x 4 x 3 x 2 x 1 =  120
