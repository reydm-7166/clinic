<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Service extends CI_Model {
        public function get_treatments(){
            return $this->db->query("SELECT * FROM treatments WHERE treatments_category_id = 1")->result_array();
        }
        public function get_services(){
            return $this->db->query("SELECT * FROM treatments WHERE treatments_category_id = 2")->result_array();
        }


    }