<?php

    class Appointments_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Appointment');
        }
        public function get_data(){
            $all_appointment_data = $this->Appointment->get_all_data();
            if($all_appointment_data){
                // echo "<pre>";
                //     print_r($all_appointment_data);
                // echo "<pre>";
                $this->session->set_userdata('appointment_output', $all_appointment_data);                 // store the data in session so we can display it in appointments/index  
                $this->load->view('/admin_index/appointments');
            } else {
                $this->session->unset_userdata('appointment_output');
                $this->load->view('/admin_index/appointments');
            }
        }
        public function get_data_insert($id){
            $this->session->set_userdata('delete', $id);
            $all_appointment_data = $this->Appointment->get_insert_data($id);
            if($all_appointment_data){
                $this->session->set_userdata('insert_data', $all_appointment_data);                 // store the data in session so we can display it in appointments/index       
                redirect('Appointments_admin/insert_approve');
            }
        }
        public function insert_approve(){
            $verify = $this->Appointment->insert_approve($this->session->userdata('insert_data'));
            $verify_backup = $this->Appointment->insert_to_backup($this->session->userdata('insert_data'));
            if($verify && $verify_backup){
                redirect('Appointments_admin/delete');
            }
        }

        public function delete(){
            $verify = $this->Appointment->delete($this->session->userdata('delete'));
            if($verify){
                $this->session->set_flashdata('approved', 'Marked as Done! Moved to Approved');             
                redirect('appointment');
            }
        }
    }

