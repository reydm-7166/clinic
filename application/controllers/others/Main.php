<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Main extends CI_Controller {

        public function index(){
            echo "I AM MAIN CLASS!";    
        }
        public function hello(){
            echo "HELLO WORLD!";

        }
        public function say($hi){
            echo "I say ". $hi;
        }
        public function say_anything($anything){
            $data = array('key' => $anything);
            $this->load->view('hello', $data);
        }
        public function danger(){
            redirect('/');
        }
        public function world(){
            $this->load->view('world');    
        }
        public function ninjas($limit){
            $count = array('key'=> $limit);
            $this->load->view('ninjas', $count);    
        }
    }
?>


