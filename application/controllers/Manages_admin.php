<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Manages_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library("form_validation");
            $this->load->model('Edit_userdata');
            $this->load->model('get_treatment_option');
            $signup_verify = $this->get_treatment_option->get_all_manage();
            if($signup_verify){
                $this->session->set_userdata('treatment_contents', $signup_verify);
                //var_dump($signup_verify);
           }
        }
        public function index(){
            $this->load->view('/admin_index/admin_contents');
        } 
    }