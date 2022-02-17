<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Random extends CI_Controller {
        public function output(){
            if(is_null($this->session->userdata('remaining'))){
                $last = $this->session->set_userdata('remaining', 0);
            } 
            $last = $this->session->userdata('remaining');
            if ($last < 10) {
                $this->session->set_userdata('remaining', $last += 1);
            } else {
                $this->session->set_userdata('remaining', 0);
            }
            $this->load->view('raffle/output');
        }
    }