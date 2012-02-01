<?php
	//conexion a la base
	require 'conexion/DB.class.php';
	require 'conexion/Conf.class.php';

	$db = DB::getInstance();
	
	/* Parametros */
	if(isset($_GET['user']) && intval($_GET['user'])) {

		/* recibir variables por medio de GET */
		$usuariosId = isset($_GET['num']) ? intval($_GET['num']) : 1; // # 1 es default
		$format = 'json'; //tipo de formato que devuelve es JSON

		/* consulta a la tabla comida dependiendo del id del usuario */

		$sql = "SELECT nombre FROM comidas WHERE '$usuariosId'";

		$result = $db->ejecutar($sql);

		$comidas = $db->obtener_fila($result);

		/* salida de datos en formato json */
		if($format == 'json') {
			header('Content-type: application/json');
			echo json_encode(array('comidas'=>$comidas));
		}

	}
?>