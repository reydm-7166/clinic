<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

    class Edits_userdata extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Edit_userdata');
            $this->load->library("form_validation");
        }
         /*___________________________________________________________________________________________________________ 
        |  Fetch data from model (EDit_userdata) and store it in to_edit session data and                             |
        |  display it in index, redirects first to view function                                                      |
        |___________________________________________________________________________________________________________ */

        public function index($id){
            $verify = $this->Edit_userdata->get_data($id);
            if($verify){
                $this->session->set_userdata('to_edit_userdata', $verify);
            }
            redirect('editusers');                                                         
        } 
        
        public function update_user(){
            $updated_form = $this->input->post(NULL, TRUE);

            if($this->input->post('Save')){
                $this->form_validation->set_rules("edit_firstname", "First name", "trim|required|alpha");
                $this->form_validation->set_rules("edit_lastname", "Last name", "trim|required|alpha");
                $this->form_validation->set_rules("edit_email", "Email", "required|valid_email");
                $this->form_validation->set_rules("edit_number", "Contact Number", "required|numeric|exact_length[11]");
                $this->form_validation->set_rules("edit_password", "Password", "required|min_length[8]");

                if($this->form_validation->run() === FALSE) {                   ///// if there is error in the validation, data won't go to the database
                    return $this->load->view('admin_index/edit_userdata');
                }
                $verify = $this->Edit_userdata->update_user($updated_form);
                if($verify){
                    $_SESSION['approved'] = "Edited Successfully!";
                    redirect('user');
                }
            }
            redirect('user');
        }
        public function view(){
            $this->load->view('admin_index/edit_userdata');
        }
    }