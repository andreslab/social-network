<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	require("Controllers/sessionController.php");
	
	echo"<div>";
		$login=new sessionController();
		$login->getUserName();
	echo"</div>";
 ?>
</body>
</html>