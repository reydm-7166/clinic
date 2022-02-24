<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Signin_users extends CI_Controller {
        public function index(){
            $this->load->view('/clinic_index/signin');
        }  
        public function user_login(){
        $credentials = $this->input->post(NULL, TRUE);
        $this->load->model('Signin');
        $this->load->library("form_validation");

        if($credentials['submit'] == 'Login') {
            $credentials['password'] = md5($credentials['password']);                                   /// encrypts the password submitted to md5 to be verified
            print_r($credentials);
            $verify = $this->Signin->check_login($credentials);
            
            if($verify){                                                                    /// store user data in session when logged in
                $this->session->set_userdata('verify', $verify);
                redirect('index');
            }
            $_SESSION['notification_error'] = "Wrong Credentials!";                          /// redirects back when user || pass is wrong
            redirect('signin');
        }
    }

    public function user_home(){
        $this->load->view('/clinic_index/index');
    }
    public function logout(){
        $this->session->unset_userdata('verify');
        redirect('signin');
    }
}