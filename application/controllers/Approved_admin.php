<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Approved_admin extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Approved');
        }
        public function get_data(){
            $all_appointment_data = $this->Approved->get_all_data();
            if($all_appointment_data){
                $this->session->set_userdata('approved_data', $all_appointment_data);              
                $this->load->view('/admin_index/approved');
            } else {
                $this->session->unset_userdata('approved_data');
                $this->load->view('/admin_index/approved');
            }
        }
        public function get_insert_receipt($id){
            $this->session->set_userdata('delete_approved', $id);    
            $verify = $this->Approved->get_insert_receipt($id);
            if($verify){
                $this->session->set_userdata('insert_approved', $verify);
                $this->insert_receipt();                                                                          // redirects to the indicated (insert_receipt) method
            }
        }
        public function insert_receipt(){
            $verify = $this->Approved->insert_receipt($this->session->userdata('insert_approved'));
            if($verify){
                $this->session->set_flashdata('approved', 'Marked as Finished! Moved to receipts');
                $this->delete();                                                                         // redirects to the indicated (delete) method
            }
        }
        public function delete(){
            $verify = $this->Approved->delete($this->session->userdata('delete_approved'));
            if($verify){
                $this->session->set_flashdata('approved', 'Marked as Done! Moved to Receipt');             
                redirect('approved');                                                                         // redirects to the indicated (get_data or index) method
            }
        }
    }