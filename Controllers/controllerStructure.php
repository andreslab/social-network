<?php 
	interface sessionOut{
		public function get_picture();
		public function get_userName();
		public function get_description();
		public function get_group();
		public function get_career(); 
	}
	interface sessionIn extends sessionOut{
		public function set_picture();
		public function set_userName();
		public function set_name();
		public function set_description();
		public function set_career(); 
	}
 ?>