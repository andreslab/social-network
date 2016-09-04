<?php 
	require ("config.php");

	class connect{
		
		private $con;

		public function __construct(){}
		public function Database(){
			$this->con= new mysqli(
				SERVER, 
				USER, 
				PASS, 
				DB);

			if(mysqli_connect_errno()){
				printf("Falló la conección: %s", mysqli_connect_error());
				echo "<br>";
				exit();
			}else{
				echo "conección exitosa";
				echo "<br>";
			}
		}
		/*public function SingleRequest($sql){
			$con->query($sql);
		}
		public function InsertRequest($sql, $typeData,$arrayData){
			$result=$con->prepare($sql);
			$result->bind_param($typeData, $arrayData);
		}*/
		public function ReturnRequest($sql){
			$result=$this->con->query($sql);
			return $result;
		}

		public function __destruct(){
			echo "destruir la conexión";
			echo "<br>";
			$this->con->close();
		}
	}
?>