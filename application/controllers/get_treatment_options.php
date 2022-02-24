<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class get_treatment_options extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('get_treatment_option');
        }
        public function get_all_signup(){
           $signup_verify = $this->get_treatment_option->get_all();
           if($signup_verify){
            //    echo "<pre>";
            //         print_r($signup_verify);
            //    echo "<pre>"; 
            $this->session->set_userdata('contents', $signup_verify);
           }
        }

        // public function get_all_edit(){
        //    $edit_verify = $this->get_treatment_option->get_all();
        //    if($verify){
        //        echo "<pre>";
        //             print_r($edit_verify);
        //        echo "<pre>"; 
               
        //    }
        // }
    }