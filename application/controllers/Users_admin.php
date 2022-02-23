<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Users_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User');
        }

        public function get_data(){
            $all_appointment_data = $this->User->get_all_data();

            if($all_appointment_data){
                // echo "<pre>";
                //     print_r($all_appointment_data);
                // echo "<pre>";
                $this->session->set_userdata('output', $all_appointment_data);                 // store the data in session so we can display it in appointments/index 
                $this->load->view('/admin_index/users');
            }
        }

    }