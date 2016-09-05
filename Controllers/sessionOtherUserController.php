<?php 	
	require("controllerStructure.php");
	require("Models/sessionOtherUserModel.php");


	class sessionController implements sessionIn{

		private $userName;
		private $like;
		private $career;
		private $description;
		private $picture;
		private $Name;

		private $session;
		private $r;

		public function __construct(){
			echo "constructor de controller";
			echo "<br>";
			$this->session= new sessionModel();
			
		}

		public function get_picture(){
			$this->r=$this->session->getPicture();
			while($show = $this->r->fetch_row()){
				echo $show[2];
			}
		}
		public function get_userName(){
			$this->r=$this->session->getUser();
			while($show = $this->r->fetch_row()){
				echo $show[1]." ".$show[2];
			}
		}
		public function get_description(){
			$this->r=$this->session->getPicture();
			while($show = $this->r->fetch_row()){
				echo $show[1];
			}
		}
		public function get_group(){
			$this->r=$this->session->getGroup();
			while($show = $this->r->fetch_row()){
				echo $show[2];
			}
		}
		public function get_career(){
			$this->r=$this->session->getCareer();
			while($show = $this->r->fetch_row()){
				echo $show[1];
			}
		}

		public function set_picture(){}
		public function set_userName(){}
		public function set_name(){}
		public function set_description(){}
		public function set_career(){}
	}
 ?>