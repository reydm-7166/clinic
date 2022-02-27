<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Reports_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Report');
        }
    
        public function index(){
            $this->load->view('/admin_index/report');
        }
        public function treatment_data(){
            $date_range = $this->input->post(NULL, TRUE);
            $verify = $this->Report->treatment_data($date_range);
            $this->session->set_userdata('chart', $verify);
            redirect('report');
        } 
    }