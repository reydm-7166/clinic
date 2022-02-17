<?php 

    class Logout extends CI_controller {
        public function logout(){
            $this->session->unset_userdata('verify');
            redirect('signin');
        }
    }