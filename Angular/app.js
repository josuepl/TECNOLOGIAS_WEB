console.log("HOLA mundo typescript");
alert("PRUEBA");
alert("Cambio 2");
var nombre = "Jhonr";
var edad = 35;
var apellido = "LTAHT";
var sentence = "Hola, " + nombre + " " + edad + " (" + apellido + ")";
console.log(sentence);
var vax = 4;
console.log(vax);
vax = "TEXTO";
console.log(vax);
vax = false;
console.log(vax);
function prueba(par1, par2, par3) {
    if (par2 === void 0) { par2 = "..MUNDO"; }
    console.log(par1);
    console.log(par2);
    console.log(par3);
}
prueba("HOLA");
prueba("Hola", "Mundo", "PRIM");
var foo = function (param1, param2) {
    var res;
    res = param1 + param2;
    return res;
};
