<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Manages_admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('upload');
            
            $this->load->model('get_treatment_option');
            $treatments = $this->get_treatment_option->get_all_treatments();
            $services = $this->get_treatment_option->get_all_services();

            if($treatments && $services){
                $this->session->set_userdata('treatment_contents', $treatments);
                $this->session->set_userdata('services_contents', $services);
           }
        }

        public function index(){
            $this->load->view('/admin_index/admin_contents');
        } 

        public function edit($id){
            $verify = $this->get_treatment_option->edit($id);
            echo $id . "<br>";
            if($verify){
                $this->session->set_userdata('edit_contents', $verify);
                redirect('editcontent');
           }
        }
        public function content(){
            $this->load->view('/admin_index/edit_admin_contents');
        }
        public function delete($id){
           $verify = $this->get_treatment_option->delete($id);
           if($verify){
               echo "deleted";
           }
        }

        public function edit_insert(){
            
            $data = $this->input->post(NULL, TRUE);

            if($data['submit']){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2468;

                $this->upload->initialize($config);
                   var_dump($data);
                if($this->upload->do_upload('userfile')) {
                    $data['file_name'] = $_FILES['userfile']['name'];
                    $verify = $this->get_treatment_option->edit_treatments($data);
                } else {
                    $data['file_name'] = $data['treatments_image'];
                    $verify = $this->get_treatment_option->edit_treatments($data); 
                }
                $_SESSION['success'] = "Successfully updated!";
                redirect('manage');
            }
                // $this->load->view('/admin_index/edit_admin_contents');
        }
        
        
    }