<?php
    class Registration extends CI_Controller{
        public function _construct(){
            parent::_construct();
            $this->load->database();
            $this->load->helper('url');
            $this->load->model('Reg_Model');
        }

        public function savedata(){
            $this->load->view('registration_form');

            if($this->input->post('save')){
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');

                $this->Reg_Model->saverecords($name,$email,$mobile);
                echo "Records Saved Successfully";
                
            }
        }
    }
?>