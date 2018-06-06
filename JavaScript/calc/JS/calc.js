window.onload = function () { //Acciones tras cargar la página
    pagina = document.getElementById("Resultado"); //elemento pantalla de salida
    valini = "0";
    op =false;
    aux=0;
    band=0;
    operacion ="";
}


function numero(val) {  //recoge el número pulsado en el argumento.
    if (valini == "0" || band == 1) {  // inicializar un número, 
        pagina.innerHTML = val; //mostrar en pantalla
        valini = val; //almacena un  número;
    }
    else { //continuar un número
        pagina.innerHTML += val; //añadimos y mostramos en pantalla.
        valini += val; //añadimos y guardamos
    }
    xi = 0 //el número está iniciado y podemos ampliarlo.
}

function sum(){
    aux = parseInt(valini)   ;
    valini ="0";
    band=0;
    limpia();
    operacion = "suma";
    
}

function limpia(){
    pagina.innerHTML ="0";
}

function igual(){
    aux2 = parseInt(valini);
    if (operacion == "suma")
        pagina.innerHTML =aux2+aux;
       

}