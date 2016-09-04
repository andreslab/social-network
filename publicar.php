<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div data-role="page" id="principal">
	<div data-role="panel" id="panelizq" data-position="left" data-display="overlay">
    		<h2>Menú</h2>
        	<a href="inicio_sesion.php" data-role="button" data-rel="close">Noticias</a>
            <a href="#" data-role="button" >Publicar</a>
            <a href="clubes.php" data-role="button" data-rel="close">Tus clubes</a>
            <a href="#" data-role="button" data-rel="close">Portafolio</a>
            <a href="facultad.php" data-role="button" data-rel="close">Facultad AH</a>
            <a href="cerrar_sesion.php" data-role="button" data-rel="close">Cerrar sesión</a>
    </div>

	<div data-role="header">
    	<h2>Publicar</h2>
    	<a href="#panelizq" data-role="button" data-icon="grid"></a>
        <a href="#panelder" data-role="button" data-icon="search"></a>
    </div>

	<div data-role="header" data-position="fixed">

	</div>

	<div data-role="content">
  		<form action="valida_foto.php" method="post" enctype="multipart/form-data">
        	<label for="txttema" hidden="true"></label>
    		<input type="text" value=""  placeholder="Tema" id="txttema" name="txttema" />
            
            <label for="txtcontenido" hidden="true"></label>
    		<textarea id="txtcontenido" name="txtcontenido" cols="10" rows="5"></textarea>
            
    		<label for="txtnombre" hidden="true"></label>
    		<input type="text" value=""  placeholder="Nombre" id="txtnombre" name="txtnombre" />
       
        	<label for="txtfoto" hidden="true"></label>
    		<input type="file" value="" id="txtfoto" name="txtfoto" />

        	<input type="submit" value="Enviar"/>
    	</form>
<?php
	require_once 'conexion_mysql.php';
	$sql= mysql_query("select * from publicacion");
	while($res= mysql_fetch_array($sql)){
		echo $res['nombre_foto']. "</br>";
		echo '<img src="'.$res['foto'].'" width="100" weigth="100"></br>';
	}
?>
    </div>

	<div data-role="footer" data-position="fixed">
		<h2>por FAH</h2>
	</div>

</div>
</body>
</html>