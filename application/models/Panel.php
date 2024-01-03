<?php
	class Panel extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function getHakkimizda() {
			return $this->db->query("select * from hakkimizda");
		}

		public function getYeniProjeler() {
			return $this->db->query("select * from yeni_projeler");
		}

		public function getDevamEdenProjeler() {
			return $this->db->query("select * from devam_eden_projeler");
		}
		public function getBitenProjeler() {
			return $this->db->query("select * from biten_projeler");
		}


		public function selectYeniProje($id) {
			return $this->db->query("select * from yeni_projeler where id='$id'");
		}
		public function selectDevamEdenProje($id) {
			return $this->db->query("select * from devam_eden_projeler where id='$id'");
		}
		public function selectBitenProje($id) {
			return $this->db->query("select * from biten_projeler where id='$id'");
		}

	}
?>