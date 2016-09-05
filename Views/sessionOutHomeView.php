<?php 
	require("Controllers/sessionOutHomeController.php");
	
	echo"<div>";
		$login=new sessionController();
		echo "imagenes<br>";
		$login->get_picture();
		echo "<br>";
		echo "<br>";
		echo "descripcion de fotos<br>";
		$login->get_description();
		echo "<br>";
		echo "<br>";
		echo "nombre usuarios<br>";
		$login->get_userName();
		echo "<br>";
		echo "<br>";
		echo "nombre grupo<br>";
		$login->get_userName();
		echo "<br>";
		echo "<br>";
		echo "nombre carrera<br>";
		$login->get_career();
	echo"</div>";
 ?>