<?php
	interface dataBase{
		//import data of each table

		//table carrera
		public function getCareer();
		//table carrera_docente
		public function getCareerTeacher();
		//table docente
		public function getTeacher();
		//table foto
		public function getPicture();
		//table grupo
		public function getGroup();
		//table integrantes_grupo
		public function getMembers();
		//table media
		public function getMedia();
		//table publicacion
		public function getPost();
		//table usuario
		public function getUser();

	}
 ?>