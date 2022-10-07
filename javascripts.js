function multiplicacion() {
    let cantidad;
    let c;
    let res;
    let precio = parseInt(document.getElementById("precio").value);
    cantidad = prompt("Ingrese el valor  ");
    c = parseInt(cantidad);
    sum = precio * c;
    res += sum;
    document.getElementById("sumaa").innerHTML = sum;
    //return cantidad;
}