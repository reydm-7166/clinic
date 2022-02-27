<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Reports_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('get_treatment_option');
            $signup_verify = $this->get_treatment_option->get_all();
            if($signup_verify){
                $this->session->set_userdata('contents', $signup_verify);
           }
        }    
        public function index(){
            $this->load->view('/admin_index/admin_contents');
        } 

    }