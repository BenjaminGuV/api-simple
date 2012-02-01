<?php
	//se verifica que exista soporte cURL
	if (function_exists('curl_init')) {
		//se inicia la sesion de cURL
		$ch = curl_init();
		//asignamos la direccion al cual se conecta
		curl_setopt($ch, CURLOPT_URL,"http://localhost/api/api.php?user=1");
		//el tiempo maximo de respuesta
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		//Si en el servidor al que nos conectamos hubiese alguna redirección (código 302) y nos interesa seguirla entonces debemos decírselo a cURL:
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		// se guarda el resultado obtenido
		$resultado = curl_exec ($ch);
		//se imprime
		print_r($resultado);

	} else{
		//en caso de no haber soporte cURL se imprime
		echo "no hay soporte";
	}

?>