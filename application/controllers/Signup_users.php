<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Signup_users extends CI_Controller{
        public function index(){
            $this->load->view('clinic_index/signup');
        }
        public function sign_up(){
            $form = $this->input->post(NULL, TRUE);
            //$this->output->enable_profiler(TRUE);
            $this->load->model('Signup');
            $this->load->library("form_validation");

            if($form['submit'] == 'Register') {                                                             /// Validates if data are valid when signing up
                $this->form_validation->set_rules("fname", "First name", "trim|required");
                $this->form_validation->set_rules("lname", "Last name", "trim|required");
                $this->form_validation->set_rules("email", "Email", "required|is_unique[customer_infos.email_address]|valid_email");
                $this->form_validation->set_rules("number", "Contact Number", "required|is_unique[customer_infos.contact_number]|numeric|exact_length[11]");
                $this->form_validation->set_rules("pass", "Password", "required|min_length[8]");
                $this->form_validation->set_rules("c_pass", "Repeat Password", "required|matches[pass]");
                
                if($this->form_validation->run() === FALSE) {
                    return $this->load->view('clinic_index/signup');
                }
                $form['pass'] = md5($form['pass']);
                $form['c_pass'] = md5($form['c_pass']);                                   /// encrypts the password submitted to md5 
                $verify = $this->Signup->check_register($form);
                if($verify){
                    $_SESSION['notification'] = "Successfully Registered!";
                    redirect('signup');
                }
            }
        }
    }