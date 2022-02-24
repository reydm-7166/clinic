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

            // echo json_encode($verify['user_count']);
            // echo json_encode($verify['age_chart']);
            // echo json_encode($verify['treatments_chart']);

            redirect('report');
        } 
    }