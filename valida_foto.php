<?php
	require_once 'conexion_mysql.php';
	$nom=$_REQUEST["txtnombre"];
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="IMG/".$foto;
	copy($ruta,$destino);
	//$sql="INSERT INTO publicacion (codigo_publicacion,tema_publicacion, contenido_publicacion, codigo_integrante,nombre_foto,foto,fecha_publicacion)values(null,'".$_POST['txttema']."','".$_POST['txtcontenido']."','2','".$nom."','".$destino."','zdfdsfsd')";
	mysql_query("insert into publicacion (codigo_publicacion,tema_publicacion, contenido_publicacion, codigo_integrante,nombre_foto,foto,fecha_publicacion)values(null,'{$_POST['txttema']}','{$_POST['txtcontenido']}','2','$nom','$destino',now())");
	header("Location: inicio_sesion.php");

?>