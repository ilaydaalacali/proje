<?php
	class Show extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model("Panel");
			$this->load->library("session");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}

		public function yeni_projeler() {
			$veriler = $this->Panel->getYeniProjeler();

			$array = array(
				"veriler" => $veriler
			);

			$this->load->view("show_records/yeni_projeler",$array);
		}

		public function devam_eden_projeler() {
			$veriler = $this->Panel->getDevamEdenProjeler();

			$array = array(
				"veriler" => $veriler
			);

			$this->load->view("show_records/devam_eden_projeler",$array);
		}

		public function biten_projeler() {
			$veriler = $this->Panel->getBitenProjeler();

			$array = array(
				"veriler" => $veriler
			);

			$this->load->view("show_records/biten_projeler",$array);
		}
	}
?>