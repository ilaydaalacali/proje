<?php
	class Panel extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function getHakkimizda() {
			return $this->db->query("select * from hakkimizda");
		}
		public function sayHello() {
			return "wormer";
		}
	}
?>