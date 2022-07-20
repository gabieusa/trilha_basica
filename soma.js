// Função para somar 4 valores

function somar(a, b,c,d, soma) {
	
	return a + b + c + d + soma;
}


let num1 = parseFloat(prompt('Informe um valor:  '));
let num2 = parseFloat(prompt('Informe um segundo valor: '));
let num3 = parseFloat(prompt('Informe um terceiro valor: '));
let num4 = parseFloat(prompt('Informe um quarto valor: '));

let resultado = somar(num1, num2, num3, num4);


console.log("A soma :  " + resultado);
