<?php 
	class New_Model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function yeni_proje_ekle($array = array()) {
			return $this->db->insert("yeni_projeler",$array);
		}
		public function devam_eden_proje_ekle($array = array()) {
			return $this->db->insert("devam_eden_projeler",$array);
		}
		public function biten_proje_ekle($array = array()) {
			return $this->db->insert("biten_projeler",$array);
		}
	}
?>