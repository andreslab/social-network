<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
require ('conexion_mysql.php');

$user_check=$_SESSION['login_user'];
$ses_sql=$con->query("SELECT correo_usuario FROM usuario WHERE correo_usuario='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['correo_usuario'];
	//Si el usuario no esta logeado se envia al login
	if(!isset($login_session)){
		header("Location: index.php");
	}
?>
</body>
</html>