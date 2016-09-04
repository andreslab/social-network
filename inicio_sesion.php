<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hola</title>
<link href="jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css" />
<script src="jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.5.min.js" type="text/javascript"></script>

</head>
<?php
	require ('conexion_mysql.php');
	require ('valida_usuario.php');
?>
<body>

<div data-role="page" id="principal">
	<div data-role="panel" id="panelizq" data-position="left" data-display="overlay">
            <a href="#" data-role="button" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-back"></a>
        	<a href="#" data-role="button">Noticias</a>
            <a href="publicar.php" data-role="button" data-rel="close">Publicar</a>
            <a href="clubes.php" data-role="button" data-rel="close">Tus clubes</a>
            <a href="portafolio.php" data-role="button" data-rel="close">Portafolio</a>
            <a href="facultad.php" data-role="button" data-rel="close">Facultad AH</a>
            <a href="cerrar_sesion.php" data-role="button" data-rel="close">Cerrar sesión</a>
    </div>

	<div data-role="header">
    	<h2>Noticias</h2>
    	<a href="#panelizq" data-role="button" data-icon="grid"></a>
        <a href="#panelder" data-role="button" data-icon="search"></a>
    </div>

	<div data-role="header" data-position="fixed">

	</div>

	<div data-role="content">
  		<h2>Hola</h2>  
    </div>

	<div data-role="footer" data-position="fixed">
		<h2>por FAH</h2>
	</div>

</div>


</body>
</html>