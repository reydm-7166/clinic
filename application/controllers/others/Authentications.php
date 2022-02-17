<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Authentications extends CI_Controller {
        
        public function index(){
            $this->load->view('log_sign/index');
        }
        public function sign_up(){
            $form = $this->input->post(NULL, TRUE);
            // $this->output->enable_profiler(TRUE);
            $this->load->model('Authentication');
            $this->load->library("form_validation");

            if($form['submit'] == 'register') {
                $this->form_validation->set_rules("fname", "First name", "trim|required");
                $this->form_validation->set_rules("lname", "Last name", "trim|required");
                $this->form_validation->set_rules("number", "Contact Number", "required|is_unique[login.contact_number]|numeric|exact_length[11]");
                $this->form_validation->set_rules("email", "Email", "required|is_unique[login.email]|valid_email");
                $this->form_validation->set_rules("pass", "Password", "required|min_length[8]");
                $this->form_validation->set_rules("c_pass", "Repeat Password", "required|matches[pass]");
                
                if($this->form_validation->run() === FALSE) {
                    return $this->load->view('log_sign/index');
                }
                $verify = $this->Authentication->check_register($form);
                if($verify === TRUE){
                    $_SESSION['notification'] = "Successfully Added!";
                    redirect('Authentications/index');
                }
            }
        }
        public function user(){
            $credentials = $this->input->post(NULL, TRUE);
            $this->output->enable_profiler(TRUE);
            $this->load->model('Authentication');
            $this->load->library("form_validation");

            if($credentials['submit'] == 'login') {
                $verify = $this->Authentication->check_login($credentials);
                if($verify){
                    $this->session->set_userdata('verify', $verify);
                    redirect('Authentications/user_home');
                }
                $_SESSION['notification_error'] = "Wrong Credentials!";
                redirect('Authentications/index');
            }
        }
        public function user_home(){
            $this->load->view('log_sign/user');
        }
        public function logout(){
            $this->session->unset_userdata('verify');
            redirect('Authentications/index');
        }
        
    }