<?php
    class Registration2 extends CI_Controller {
    public function __construct() {
        //call CodeIgniter's default Constructor
        parent::__construct();
        
        //load database libray manually
        $this->load->database();
        
        //load Model
        $this->load->model('Reg_Model2');

        //load a helper 
        $this->load->helper('url');
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
            // echo "Records Saved Successfully";
            redirect("Registration2/display");
            }
        }

        public function display() {
            $result['data']=$this->Reg_Model2->displayrecords();
            $this->load->view('display_records2',$result);
        }

        public function deleteData() {
            $id=$this->input->get('id');
            $this->Reg_Model2->deleteRecords($id);
            redirect("Registration2/display");
        }

        public function updatedata() {
            $id=$this->input->get('id');
            $result['data']=$this->Reg_Model2->displayrecordsById($id);
            $this->load->view('update_records',$result); 
            
            if($this->input->post('update')) {
                $n=$this->input->post('name');
                $e=$this->input->post('email');
                $m=$this->input->post('mobile');
                $this->Reg_Model2->updaterecords($n,$e,$m,$id);
                redirect("Registration2/display");
                }
            }
    }
?>