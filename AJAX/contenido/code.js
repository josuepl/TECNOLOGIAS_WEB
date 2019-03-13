
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("contenidos").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("contenidos").innerHTML = this.responseText;
    }
  };
    
    
  xhttp.open("GET", "generaContenidos.php", true);
  xhttp.send();
}

function carga()
	{
		contador_s =0;
		contador_m =0;
		s = document.getElementById("segundos");
		m = document.getElementById("minutos");

		cronometro = setInterval(
			function(){
				if(contador_s==60)
				{
					contador_s=0;
					contador_m++;
					m.innerHTML = contador_m;
                    showCustomer("HOLA");
					if(contador_m==60)
					{
						contador_m=0;
					}
				}

				s.innerHTML = contador_s;
				contador_s++;

			}
			,1000);

	}