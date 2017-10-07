<?php
	 class usuario {
		public $nombre;
		public $edad;
		public function imprime(){
			echo "nombre";
		}
	}

	$usr1 = new usuario();
	$nm = "Josue";
	//$usr1=>nombre = $nm;
	$usr1.imprime();
?>