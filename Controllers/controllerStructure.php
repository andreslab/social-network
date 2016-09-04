<?php 
	interface sessionOut{
		public function getImage();
		public function getUserName();
		public function getDescription();
		public function getLike();
		public function getcareer(); 
	}
	interface sessionIn extends sessionOut{
		public function setImage();
		public function setUserName();
		public function setName();
		public function setDescription();
		public function setcareer(); 
	}
 ?>