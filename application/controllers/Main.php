<?php
    class Main extends CI_Controller {
        public function __contruct() {
            parent::__construct();
        }

        public function index() {
            $this->load->view("main");
        }

        public function hakkimizda() {
            $this->load->view("hakkımızda");
        }
        public function yeni_projeler() {
            $this->load->view("yeni_projeler");
        }
        public function devam_eden_projeler() {
            $this->load->view("devam_eden_projeler");
        }
        public function biten_projeler() {
            $this->load->view("biten_projeler");
        }
        public function pvc_marangoz() {
            $this->load->view("pvc_marangoz");
        }
        public function iletisim() {
            $this->load->view("iletişim");
        }
    }
?>