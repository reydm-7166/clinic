<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Users_history extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User_history');
        }

        /*
        *       Get appointment history of get_count method and render to view
        *       if there is no appointment history return immediately with a session warning there is no history.
        *
        */
        public function get_all($id){
            $verify = $this->User_history->get_all($id);
            if($verify){
                $this->session->set_userdata('history', $verify);
                $this->get_count($id);
            } else {
                $_SESSION['empty_history'] = "This user has no appointment history";
                redirect('history');
            }
        }
        
        /*
        *       Get appointment history count of appointment / name and USER ID then
        *       then go to view method
        *
        */

        public function get_count($id){
            $verify = $this->User_history->appointment_count($id);
            if($verify){
                $_SESSION['appointment_count'] = $verify['total'];
                //$this->session->set_userdata('history', $verify);
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