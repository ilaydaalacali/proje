<?php
    class Main extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("Panel");
            $this->load->library("session");
        }

        public function index() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
            $this->load->view("main",array("signed_in" => $signed_in));
        }

        public function hakkimizda() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
            $data = $this->Panel->getHakkimizda();
            
            $view_datas = array();

            if ($data) {
                foreach ($data->result() as $veri) {
                    $view_datas["header"] = $veri->header;
                    $view_datas["body"] = $veri->body;

                }
            }

            $view_datas["signed_in"] = $signed_in;


            $this->load->view("hakkımızda",$view_datas);
        }
        public function yeni_projeler() {
            $data = $this->Panel->getYeniProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("yeni_projeler",$veri);
        }

        public function devam_eden_projeler() {
            $data = $this->Panel->getDevamEdenProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("devam_eden_projeler",$veri);
        }
        public function biten_projeler() {
            $data = $this->Panel->getBitenProjeler();
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $veri = array(
                "data" => $data,
                "signed_in" => $signed_in
            );

            $this->load->view("biten_projeler",$veri);
        }
        public function pvc_marangoz() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);

            $this->load->view("pvc_marangoz",array("signed_in" => $signed_in));
        }
        public function iletisim() {
            $signed_in = ($this->session->userdata("logged_in") == '' ? false : true);
            $this->load->view("iletişim",array("signed_in" => $signed_in));
        }
    }
?>