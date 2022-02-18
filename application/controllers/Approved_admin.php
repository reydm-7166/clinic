<?php 

    class Approved_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Appointment');
        }
        public function get_data(){
            $all_appointment_data = $this->Appointment->get_all_data();
            if($all_appointment_data){
                $this->session->set_userdata('receipt', $all_appointment_data);                 // store the data in session so we can display it in appointments/index 
                $this->load->view('/admin_index/approved');
            }
        }
        public function insert_receipt(){
            $verify = $this->Appointment->insert_receipts($this->session->userdata('output'));
            if($verify){
                $this->session->set_flashdata('approved', 'Marked as Done! Moved to receipts');
                redirect('appointment');
            }
        } 
    }