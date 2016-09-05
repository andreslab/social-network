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

		public function getCareer(){$data=$this->resp(CARRERA);
			return $data;}
		public function getCareerTeacher(){$data=$this->resp(CARRERA_DOCENTE);
			return $data;}
		public function getTeacher(){$data=$this->resp(DOCENTE);
			return $data;}
		public function getPicture(){$data=$this->resp(FOTO);
			return $data;}
		public function getGroup(){$data=$this->resp(GRUPO);
			return $data;}
		public function getMembers(){$data=$this->resp(INTEGRANTES_GRUPO);
			return $data;}
		public function getMedia(){$data=$this->resp(MEDIA);
			return $data;}
		public function getPost(){$data=$this->resp(PUBLICACION);
			return $data;}
		public function getUser(){$data=$this->resp(USUARIO);
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