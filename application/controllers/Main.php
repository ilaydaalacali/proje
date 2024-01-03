<?php
    class Main extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("Panel");
        }

        public function index() {
            $this->load->view("main");
        }

        public function hakkimizda() {
            $data = $this->Panel->getHakkimizda();
            
            $view_datas = array();

            if ($data) {
                foreach ($data->result() as $veri) {
                    $view_datas["header"] = $veri->header;
                    $view_datas["body"] = $veri->body;

                }
            }


            $this->load->view("hakkımızda",$view_datas);
        }
        public function yeni_projeler() {
            $data = $this->Panel->getYeniProjeler();

            $veri = array(
                "data" => $data
            );

            $this->load->view("yeni_projeler",$veri);
        }

        public function devam_eden_projeler() {
            $data = $this->Panel->getDevamEdenProjeler();

            $veri = array(
                "data" => $data
            );

            $this->load->view("devam_eden_projeler",$veri);
        }
        public function biten_projeler() {
            $data = $this->Panel->getBitenProjeler();

            $veri = array(
                "data" => $data
            );

            $this->load->view("biten_projeler",$veri);
        }
        public function pvc_marangoz() {
            $this->load->view("pvc_marangoz");
        }
        public function iletisim() {
            $this->load->view("iletişim");
        }
    }
?>