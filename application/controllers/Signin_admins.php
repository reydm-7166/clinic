<?php 

    class Signin_admins extends CI_Controller {
        public function index(){
            $this->load->view('/admin_index/login');
        }
        
        public function admin_login(){
        $credentials = $this->input->post(NULL, TRUE);
        $this->output->enable_profiler(TRUE);
        $this->load->model('Signin');
        $this->load->library("form_validation");

        if($credentials['submit'] == 'Login') {
            $verify = $this->Signin->check_login($credentials);
            
            if($verify){
                $this->session->set_userdata('admin', $verify);
                redirect('dashboard');
            }
            $_SESSION['notification_error'] = "Wrong Credentials!";
            redirect('signin');
        }
    }
    public function logout(){
        $this->session->unset_userdata('verify');
        redirect('signin');
    }

}
