function algoritmo()
{
    let um_numero;
    um_numero = parseFloat (document.forma1.um_numero.value);
    if(um_numero>0)
        alert('Positivo');
    if(um_numero<0)
        alert('Negativo');
    if(um_numero==0)
        alert('Neutro');
}
