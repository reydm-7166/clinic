<?php

    class Appointments_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Appointment');
        }
        public function get_data(){
            $all_appointment_data[] = $this->Appointment->get_all_data();
            if($all_appointment_data){
                // echo "<pre>";
                //     print_r($all_appointment_data);
                // echo "<pre>";
                $this->session->set_userdata('output', $all_appointment_data);                 // store the data in session so we can display it in appointments/index 
                $this->load->view('/admin_index/appointments');
            }
        }

        public function insert_receipt(){
            $verify = $this->Appointment->insert_receipts($this->session->userdata('output'));                 // pass the data we fetch above (line 10) and insert it to receipts table
            if($verify){
                echo "SUCESS INSERTED TO RECEIPT NOW";
            }
        } 
    }

