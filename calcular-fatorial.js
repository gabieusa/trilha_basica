var fatorial=1;
// 5! 5*4*3*2*1 = 120
var explicaFator = '';
var num = parseInt(prompt("Digite um número inteiro para calcular o fatorial: "));
for(var x = 1; x <= num; x++)
//for(var i = 0; i <= num; i++)
{
    fatorial = fatorial*x;
    if(explicaFator != ''){
      explicaFator += 'x';
    }
    explicaFator += x;
    
}
document.write(num+"! = "+explicaFator+" = "+fatorial);


Nesse link:  https://codepen.io/
Testar o código
