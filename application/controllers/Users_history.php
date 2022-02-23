<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Users_history extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User_history');
        }
        public function get_all($id){
            $verify = $this->User_history->get_all($id);
            if($verify){
                $this->session->set_userdata('history', $verify);
                $this->get_count($id);
            }
        }

        public function get_count($id){
            $verify = $this->User_history->appointment_count($id);
            if($verify){
                $this->session->set_userdata('details', $verify);
                // echo "<pre>";
                //     print_r($verify);
                // echo "<pre>";          
                redirect('history');
            }
        }

        public function view(){
            $this->load->view('admin_index/history_user');
        }

    }