<?php 
    class Logout extends CI_controller {
        public function logout(){
            $this->session->unset_userdata('verify');
            redirect('signin');
        }

        public function admin_logout(){
            $this->session->unset_userdata('verify');
            redirect('login');
        }
    }