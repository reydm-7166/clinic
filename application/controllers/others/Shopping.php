<?php 
    
    class Shopping extends CI_Controller {
        
        public function index(){
            $this->load->view('shopping/catalog');
        }
        public function cart_data(){
           $this->load->model('model_shopping');
           $cart_items = $this->model_shopping->show_cart_items();
           $this->session->set_userdata('cart_items', $cart_items);

           $this->session->set_userdata('cart_count', sizeof($cart_items));

        //    echo "<pre>";
        //         print_r($cart_items);
        //     echo "<pre>";
           redirect('Shopping/cart');   
        }

        public function cart(){
            $this->load->view('shopping/cart');
        }

        public function add_process(){
            $add_cart = $this->input->post(NULL, TRUE);
            $this->load->model('model_shopping');
            $output = $this->model_shopping->add_cart_items($add_cart);
            if($output){
                redirect('/Shopping/cart_data');
            }
        }
        public function delete_process($id){
            $this->load->model('model_shopping');
            $output = $this->model_shopping->delete_cart_items($id);
            if($output){
                redirect('/Shopping/cart_data');
            }
        }
    }