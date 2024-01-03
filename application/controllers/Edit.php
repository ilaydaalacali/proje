<?php
	class Edit extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library("session");
			$this->load->model("Edit_Model");
			$this->load->model("Panel");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}

		public function hakkimizda_edit() {
			$veriler = $this->Panel->getHakkimizda();

			$datas = array();

			foreach ($veriler->result() as $veri) {
				$datas["header"] = $veri->header;
				$datas["body"] = $veri->body;
			}

			$this->load->view("edit_pages/hakkimizda_düzenle", $datas);
		}

		public function hakkimizda_edit_post() {
			$header = $this->input->post("header");
			$body = $this->input->post("body");

			$array = array(
				"header" => $header,
				"body" => $body
			);

			if ($this->Edit_Model->hakkimizda_edit($array)) {
				redirect("/panel");
			} else {
				redirect("/edit/hakkimizda");
			}
		}

		// ######################################################################################

		public function yeni_projeler_edit($id) {
			$veriler = $this->Panel->selectYeniProje($id);

			$array = array();

			foreach ($veriler->result() as $veri) {
				$array["id"] = $veri->id;
				$array["header"] = $veri->header;
				$array["body"] = $veri->body;
			}

			$this->load->view("edit_pages/yeni_projeler_düzenle",$array);
		}

		public function yeni_projeler_edit_post() {
			$header = $this->input->post("header");
			$body = $this->input->post("body");
			$id = $this->input->post("id");

			$array = array(
				"id" => $id,
				"header" => $header,
				"body" => $body
			);

			if ($this->Edit_Model->yeni_projeler_edit($array)) {
				redirect("/panel");
			} else {
				redirect("/edit/yeni_projeler/$id");
			}
		}

		// #######################################################################################

		public function devam_eden_projeler_edit($id) {
			$veriler = $this->Panel->selectDevamEdenProje($id);

			$array = array();

			foreach ($veriler->result() as $veri) {
				$array["id"] = $veri->id;
				$array["header"] = $veri->header;
				$array["body"] = $veri->body;
			}

			$this->load->view("edit_pages/devam_eden_projeler_düzenle",$array);
		}

		public function devam_eden_projeler_edit_post() {
			$header = $this->input->post("header");
			$body = $this->input->post("body");
			$id = $this->input->post("id");

			$array = array(
				"id" => $id,
				"header" => $header,
				"body" => $body
			);

			if ($this->Edit_Model->devam_eden_projeler_edit($array)) {
				redirect("/panel");
			} else {
				redirect("/edit/yeni_projeler/$id");
			}
		}

		// ########################################################################################

		public function biten_projeler_edit($id) {
			$veriler = $this->Panel->selectBitenProje($id);

			$array = array();

			foreach ($veriler->result() as $veri) {
				$array["id"] = $veri->id;
				$array["header"] = $veri->header;
				$array["body"] = $veri->body;
			}

			$this->load->view("edit_pages/biten_projeler_düzenle",$array);
		}

		public function biten_projeler_edit_post() {
			$header = $this->input->post("header");
			$body = $this->input->post("body");
			$id = $this->input->post("id");

			$array = array(
				"id" => $id,
				"header" => $header,
				"body" => $body
			);

			if ($this->Edit_Model->biten_projeler_edit($array)) {
				redirect("/panel");
			} else {
				redirect("/edit/yeni_projeler/$id");
			}
		}
	}
?>