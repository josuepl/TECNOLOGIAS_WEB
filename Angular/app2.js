var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var miprom = new Promise(function (resolve, reject) {
    reject();
});
miprom.then(function () {
    console.log("promise exito");
}, function () {
    console.log("promise error");
});
function Bienvenida(target) {
    target.prototype.saludo = function () {
        console.log("Funcion SALUDO");
    };
}
var Saludar = /** @class */ (function () {
    function Saludar() {
    }
    Saludar = __decorate([
        Bienvenida
    ], Saludar);
    return Saludar;
}());
var miSal = new Saludar();
miSal.saludo();
