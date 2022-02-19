<?php 

    class Receipt_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Receipts');
        }
        public function get_data(){
            $all_appointment_data = $this->Receipts->get_all_data();
            if($all_appointment_data){
                // echo "<pre>";
                //     print_r($all_appointment_data);
                // echo "<pre>";
                $this->session->set_userdata('receipt', $all_appointment_data);                 // store the data in session so we can display it in appointments/index 
                $this->load->view('/admin_index/receipt');
            }else {
                $this->session->unset_userdata('receipt');
                $this->load->view('/admin_index/receipt');
            }
        }
    }