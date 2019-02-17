<?php
    class Hello extends CI_Controller {
        public function index() {
            echo "<h1>Hello</h1>";
        }

        public function about() {
            $this->load->view('ucsc/ucsc_about.php');
        }



}
?>