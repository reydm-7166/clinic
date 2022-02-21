<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Reports_admin extends CI_Controller {
        public function index(){
            $this->load->view('/admin_index/report');
        } 
    }

