<?php 
	require("link.php");	
	require("modelStructure.php");
	require("requestList.php");


	class sessionModel implements dataBase{

		private $link;

		public function __construct(){
			$this->link=new connect();
			echo "constructor de sesion model";
			echo "<br>";
		}

		public function getCareer(){$data=$this->resp(CARRERA_SIA);
			return $data;}
		public function getCareerTeacher(){$data=$this->resp(CARRERA_DOCENTE_SIA);
			return $data;}
		public function getTeacher(){$data=$this->resp(DOCENTE_SIA);
			return $data;}
		public function getPicture(){$data=$this->resp(FOTO_SIA);
			return $data;}
		public function getGroup(){$data=$this->resp(GRUPO_SIA);
			return $data;}
		public function getMembers(){$data=$this->resp(INTEGRANTES_GRUPO_SIA);
			return $data;}
		public function getMedia(){$data=$this->resp(MEDIA_SIA);
			return $data;}
		public function getPost(){$data=$this->resp(PUBLICACION_SIA);
			return $data;}
		public function getUser(){$data=$this->resp(USUARIO_SIA);
			return $data;}

		private function resp($sql){
			$this->link->Database();
			$response=$this->link->ReturnRequest($sql);
			return $response;
		}

		public function __destruct(){
			echo "Datos extraidos con exito";
			echo "<br>";
		}
	}
 ?>