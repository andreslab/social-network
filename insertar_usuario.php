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
<div data-role="page" id="registro">

	<div data-role="header" data-add-back-btn="true" data-position="fixed">
		<h2>Resgistro</h2>
	</div>

	<div data-role="content">
		<form action="insertar_usuario_sql.php" method="post">
    		<label for="txtnombre" hidden="true"></label>
    		<input type="text" value=""  placeholder="Nombre" id="txtnombre" name="txtnombre" />
       
        	<label for="txtapellido" hidden="true"></label>
    		<input type="text" value="" id="apellido" placeholder="Apellido" name="txtapellido" />
            
            <label for="txtcorreo" hidden="true"></label>
    		<input type="email" value=""  placeholder="Correo" id="txtcorreo" name="txtcorreo" />
            
            <label for="txtclave" hidden="true"></label>
    		<input type="password" value=""  placeholder="Clave" id="txtclave" name="txtclave" />
       
            <legend>Carrera:</legend>
    		<?php
				require 'conexion_mysql.php';
				$sql = "SELECT * FROM carrera";
				$rs= $con->query ($sql); 
				echo " <select name='txtcarrera' id='txtcarrera'>";
				while($lista=$rs->fetch_array()){
					echo "<option value='".$lista['codigo_carrera']. "'>".$lista['nombre_carrera']."</option>";
				}
				echo "</select>";
			?>
            
            <legend>Sexo:</legend>
            <fieldset data-role="controlgroup">
            	<label for="rdbm">Masculino</label>
            	<input type="radio" id="rdbm" name="rdbsexo" checked="checked" value="M"/>
            	<label for="rdbf">Femenino</label>
            	<input type="radio" id="rdbf" name="rdbsexo" value="F"/>   
        	</fieldset>
       
        	<input type="submit" value="Registrarse"/>
    	</form> 
    </div>

	<div data-role="footer" data-position="fixed">
		<h2>por FAH</h2>
	</div>

</div>

</body>
</html>