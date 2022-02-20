<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



    class Users extends CI_Controller {
        public $count = array('count_visit' => 1);

        public function index(){
            $this->load->view('index');
        }

        public function new(){
            $this->load->view('new');
        }
        public function create(){
            if($this->input->post()) {
                $form['fname'] = $this->input->post('fname');
                $form['lname'] = $this->input->post('lname');
                $form['email'] = $this->input->post('email');   
                echo "THIS FEATURE IS COMING SOON!";
            } else {
                redirect('/Users/index');
            }
        }
        public function count(){
            $old = $this->session->userdata('count_visit');

            $this->session->set_userdata('count_visit', $old += 1);

            $this->load->view('count');
        }

        public function process(){
            $this->session->set_userdata('count_visit', 0);
            redirect('/Users/count');
        }   

        public function reset(){
            $this->load->view('reset');
        }

        public function say($say, $num){

            $word = array('say' => $say,'num' => $num);     
            $this->load->view('say', $word);   
        }
        public function mprep(){
          $view_data = array(
                'name' => "Michael Choi",
               'age'  => 40,
               'location' => "Seattle, WA",
               'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
                );
           $this->load->view('mprep', $view_data);
     }
}

    





