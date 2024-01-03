<?php
	class New_Record extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library("session");
			$this->load->model("New_Model");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}

		public function yeni_proje_ekle() {
			$this->load->view("new/yeni_projeler");
		}

		public function yeni_proje_ekle_post() {
			$array = array(
				"header" => $this->input->post("header"),
				"body" => $this->input->post("body"),
				"image" => $this->input->post("image")
			);

			if ($this->New_Model->yeni_proje_ekle($array)) {
				redirect("/panel");
			} else {
				redirect("new/yeni_proje");
			}
		}
		// ##################################################

		public function devam_eden_proje_ekle() {
			$this->load->view("new/devam_eden_projeler");
		}

		public function devam_eden_proje_ekle_post() {
			$array = array(
				"header" => $this->input->post("header"),
				"body" => $this->input->post("body"),
				"image" => $this->input->post("image")
			);

			if ($this->New_Model->devam_eden_proje_ekle($array)) {
				redirect("/panel");
			} else {
				redirect("/new/devam_eden_proje");
			}
		}

		// ##################################################
		
		public function biten_proje_ekle() {
			$this->load->view("new/biten_projeler");
		}

		public function biten_proje_ekle_post() {
			$array = array(
				"header" => $this->input->post("header"),
				"body" => $this->input->post("body"),
				"image" => $this->input->post("image")
			);

			if ($this->New_Model->biten_proje_ekle($array)) {
				redirect("/panel");
			} else {
				redirect("/new/biten_proje");
			}
		}
	}
?>