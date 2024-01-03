<?php
	class Edit_Model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function hakkimizda_edit($values = array()) {
			extract($values);
			$this->db->update("hakkimizda",array("header" => $header,"body" => $body));
			return true;
		}

		public function yeni_projeler_edit($values = array()) {
			extract($values);
			// $this->db->where("id",$id)->update("yeni_projeler",array("header" => $header,"body" => $body));
			return $this->db->where('id',$id)->update("yeni_projeler",array("header" => $header,"body" => $body));
			// return true;
		}
		public function devam_eden_projeler_edit($values = array()) {
			extract($values);
			// $this->db->where("id",$id)->update("yeni_projeler",array("header" => $header,"body" => $body));
			return $this->db->where('id',$id)->update("devam_eden_projeler",array("header" => $header,"body" => $body));
			// return true;
		}
		public function biten_projeler_edit($values = array()) {
			extract($values);
			// $this->db->where("id",$id)->update("yeni_projeler",array("header" => $header,"body" => $body));
			return $this->db->where('id',$id)->update("biten_projeler",array("header" => $header,"body" => $body));
			// return true;
		}
	}
?>