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
                $this->session->set_userdata('output', $all_appointment_data);
                $this->load->view('/admin_index/appointments');
            }
        }

        // public function index(){
            
        // } 
    }

