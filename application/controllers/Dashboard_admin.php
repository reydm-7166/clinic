<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard_admin extends CI_Controller {
        /*________________________________________________________________________________________________________________________________________
        | this initializes the database/model that we need when the page loads                                                                    |
        |________________________________________________________________________________________________________________________________________*/
        public function __construct(){
            parent::__construct();
            $this->load->model('Report');
        }
        /*
        *   this simply loads the page index
        *   
        */
        public function index(){
            $this->load->view('/admin_index/admin_dashboard');
        }
        /*________________________________________________________________________________________________________________________________________
        | Get data from database depending on the date from the form
        | 
        |________________________________________________________________________________________________________________________________________*/
        public function dashboard_data(){
            $date_range = $this->input->post(NULL, TRUE);
            $verify = $this->Report->dashboard_data($date_range);
            
            $this->session->set_userdata('dashboard', $verify);
            redirect('dashboard');
        } 
    }