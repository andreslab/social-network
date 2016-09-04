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


<div data-role="page" id="inicio">

	<div data-role="header" data-position="fixed">
		<h2>Iniciar sesión</h2>
	</div>

	<div data-role="content">
		<form action="" method="post">
    		<label for="txtcorreo" hidden="true"></label>
    		<input type="email" value=""  placeholder="Correo" id="txtcorreo" name="txtcorreo" />
       
        	<label for="txtclave" hidden="true"></label>
    		<input type="password" value="" id="txtclave" placeholder="Contraseña" name="txtclave" />
       
   			<label> ¿Eres nuevo? <a href="insertar_usuario.php"  data-transition="slide">Regístrate</a></label>
        	<input type="submit" value="Enviar"/>
    	</form> 
        <?php
require 'conexion_mysql.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){//cuando se active todo el metodo post
//guardar datos en variables
	$myusername=$con->real_escape_string($_POST['txtcorreo']);
	$mypassword=$con->real_escape_string($_POST['txtclave']);
//consulta de la tabla
	$sql="SELECT * FROM usuario where correo_usuario='$myusername' and clave_usuario='$mypassword'";
//uso resultado de la consulta
	$result=$con->query($sql);
	$row= $result->fetch_assoc();
	$active=$row['active'];
	$count=$result->num_rows;

	if($count==1){
		$_SESSION["myusername"];
		$_SESSION['login_user']=$myusername;
		header("location: inicio_sesion.php"); //envia a la pag 
	} else {
		echo "Usuario o Password incorrecto";
	}
}
?>
    </div>

	<div data-role="footer" data-position="fixed">
		<h2>por FAH</h2>
	</div>

</div>


</body>
</html>
