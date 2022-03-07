<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Logout extends CI_controller {
        public function user_logout(){
            $this->session->unset_userdata('verify');
            redirect('signin');
        }
        public function admin_logout(){
            $this->session->unset_userdata('verify');
            redirect('login');
        }
    }