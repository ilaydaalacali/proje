<?php
    class Main extends CI_Controller {
        public function __contruct() {
            parent::__construct();
        }

        public function index() {
            $this->load->view("main");
        }
    }
?>