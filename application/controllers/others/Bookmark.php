<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Bookmark extends CI_Controller{
        public function addprocess(){
            $this->load->view('bookmark/index');
        }
        public function process(){
            if(!empty($this->input->post())){
                $data = $this->input->post();
                $row[] = array('folder' => $data['folder'],
                            'name' => $data['name'],
                            'URL' => $data['URL'],
                            'count' => intval($data['count']));
                
                $this->session->set_userdata('row', $row);     
                
            }
             redirect('Bookmark/addprocess');
        } 
             
        
    public function destroy(){
        $row = $this->session->userdata('output');
        $this->load->view('/bookmark/confirm', $row);
    }
}