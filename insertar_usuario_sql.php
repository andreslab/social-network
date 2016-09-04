<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link href="jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
</head>

<body>

<div data-role="page" id="inserta_registro">

	<div data-role="header" data-add-back-btn="true" data-position="fixed">
    <a href="index.php" data-icon="home" data-iconpos="left">Inicio</a>
		<h2>Resgistro</h2>
	</div>

	<div data-role="content">
		<?php
		require 'conexion_mysql.php'; 
//insert into <nombre de tabla> <campos de la tabla> values <'datos de la tabla'>

$sql="INSERT INTO usuario(codigo_usuario, nombre_usuario, apellido_usuario, correo_usuario, clave_usuario, codigo_carrera, sexo) 
VALUES (null,'{$_POST['txtnombre']}','{$_POST['txtapellido']}','{$_POST['txtcorreo']}','{$_POST['txtclave']}',{$_POST['txtcarrera']},'{$_POST['rdbsexo']}')";

//validar datos
if($con->query($sql) === TRUE){
	echo "Datos guardados";
}else{
	echo "Error:".sql."<br>".$con->error;
}

?>
    </div>

	<div data-role="footer" data-position="fixed">
		<h2>por FAH</h2>
	</div>

</div>

</body>
</html>