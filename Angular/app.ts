console.log("HOLA mundo typescript");
alert("PRUEBA");
alert("Cambio 2");

let nombre: string="Jhonr";
let edad: number=35;
let apellido: string="LTAHT";
let sentence: string=`Hola, ${ nombre } ${edad} (${apellido})`;
console.log(sentence);

let vax: any = 4;
console.log(vax);
vax = "TEXTO";
console.log(vax);
vax = false;
console.log(vax);

function prueba(par1: string, par2: string="..MUNDO", par3?: string){
    console.log(par1);
    console.log(par2);
    console.log(par3);
}

prueba("HOLA");
prueba("Hola","Mundo","PRIM");

var foo = (param1: number, param2: number) =>{
    let res;
    res = param1+param2;
    return res;
}