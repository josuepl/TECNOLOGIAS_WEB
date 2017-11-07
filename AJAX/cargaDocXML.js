function cargaDocXML(rutaxml)
{
if (window.XMLHttpRequest) {
   xhttp=new XMLHttpRequest();
   }
else {
   xhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
xhttp.open("GET",rutaxml,true);
xhttp.send();
return xhttp.responseXML;
}