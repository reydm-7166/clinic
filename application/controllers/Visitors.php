<?php 

    class Visitors extends CI_Controller {
        public function index(){
            $this->load->view('visitor/index');
        }
        public function about(){
            $this->load->view('visitor/about');
        }
        public function faqs(){
            $this->load->view('visitor/faqs');
        }
        public function services(){
            $this->load->model('Service');

            $verify_1 = $this->Service->get_treatments();
            $verify_2 = $this->Service->get_services();
            if($verify_1 && $verify_2){
                // echo "<pre>";
                //     print_r($verify);
                //     echo "<pre>"; 
                $this->session->set_userdata('treatments', $verify_1);
                $this->session->set_userdata('services', $verify_2);
            }
            $this->load->view('visitor/services');
        }
        public function contact(){
            $this->load->view('visitor/contact');
        }
        public function register(){
            redirect('signup');
        }
    }