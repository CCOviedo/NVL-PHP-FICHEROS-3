<?php
	function funciones($ruta ,$fichero){
		$hoy = date("Ymj");
		$rutaCompleta = $ruta . '\\' . $hoy;
		
		if(!file_exists($rutaCompleta)){
			mkdir($rutaCompleta, 0777, true);
			copy($fichero, $rutaCompleta ."\\". $fichero . ".modificado");
		}else{
			copy($fichero, $rutaCompleta ."\\". $fichero . ".modificado");
		}
	}
	
	funciones("C:\\xampp\\htdocs", "elquijote.txt");
?>