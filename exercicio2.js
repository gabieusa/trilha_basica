//Função 4 números somar os 2 maiores
<var maior1= 0;
var maior2 = 0;
[2,3,22,10,11,100].forEach(function(numero){
    if(numero > maior1) {
        maior2 = maior1;
        maior1 = numero;
    }else if(numero > maior2){
        maior2 = numero;
    }
    
});
console.log(`Maior número ${maior1}\nSegundo maior número ${maior2}`);
