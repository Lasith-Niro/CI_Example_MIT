<?php
    class Registration extends CI_Controller {
        public function __construct() {
            //call CodeIgniter's default Constructor
            parent::__construct();
            
            //load database libray manually
            $this->load->database();
            
            //load Model
            $this->load->model('Reg_Model');

        }
    
    public function savedata() {
        //load registration view form
        $this->load->view('registration');
        
        //Check submit button 
        if($this->input->post('save')) {
            //get form's data and store in local varable
            $n=$this->input->post('name');
            $e=$this->input->post('email');
            $m=$this->input->post('mobile');
            
            //call saverecords method of Reg_Model and pass variables as parameter
            $this->Reg_Model->saverecords($n,$e,$m); 
            echo "Records Saved Successfully";
            }
        }

    }
?>