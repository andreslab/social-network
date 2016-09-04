<?php
	$servidor= "localhost";
	$usuario= "root";
	$clave= "";
	$bd= "apk_tutoria"; //nombre base de datos
	
	//crea conexion
	$con= new MySQLi($servidor, $usuario, $clave, $bd);
	
	//validar si se conecta
	if($con->connect_error){
		die ("Error de conexión". $con->connect_error);
	}else{
	}
	
?>