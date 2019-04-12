let miprom = new Promise(function(resolve:any,reject:any){
    reject();

});
miprom.then(function(){
    console.log("promise exito");
}, function(){
    console.log("promise error");
});

function Bienvenida (target:Function): void {
    target.prototype.saludo = function():void{
        console.log("Funcion SALUDO");
    }
}

@Bienvenida
class Saludar{
    constructor(){

    }
}

var miSal = new Saludar();
miSal.saludo();
