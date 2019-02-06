
function mostraralerta(){
alert('hizo clic!');
}

/*
function hacerclic(){
document.getElementsByTagName('p')[1].onclick=mostraralerta;
}*/


/*
function hacerclic(){
document.querySelector("#otro p:first-child");
onclick=mostraralerta;
}
*/

 
function hacerclic(){
var lista=document.querySelectorAll("#principal p");
lista[0].onclick=mostraralerta;
lista[1].onclick=mostraralerta; 
}



/*
function hacerclic(){
    var lista=document.querySelectorAll("#principal p");
    for(var f=0; f<lista.length; f++){
    lista[f].onclick=mostraralerta;
    }
}
*/
window.onload=hacerclic;
