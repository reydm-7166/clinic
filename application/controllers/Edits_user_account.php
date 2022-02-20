<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Edits_user_account extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Edit_userdata');
        }
        public function index($id){
            $verify = $this->Edit_userdata->get_data($id);
            
            if($verify){
                $this->session->set_userdata('to_edit', $verify);
            }


            $this->load->view('admin_index/edit_appointment');
        }
        
    }

