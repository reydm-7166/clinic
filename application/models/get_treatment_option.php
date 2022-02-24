<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class get_treatment_option extends CI_Model {
        public function get_all(){
            return $this->db->query("SELECT * FROM treatments")->result_array();
        }


    }